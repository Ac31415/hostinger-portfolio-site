// Conditional polyfill for native Popover API in older browsers
if (!Object.hasOwn(HTMLElement.prototype, 'popover')) {
  import('https://unpkg.com/@oddbird/popover-polyfill@latest/dist/popover.min.js');
}

const header = document.querySelector('.site-header-sticky');
const headerInner = header?.querySelector('.header-inner');
const menu = document.getElementById('site-menu');
const menuButton = header?.querySelector('.menu-button');

// Dynamic wide vs. collapsed popover navigation measurement
if (header && headerInner && menu) {
  let lastCollapsedWidth = 0;

  const isPopoverOpen = (el) => {
    try {
      return el.matches(':popover-open');
    } catch {
      return el.classList.contains(':popover-open');
    }
  };

  const updateNavLayout = (force = false) => {
    const isWide = header.classList.contains('is-wide');
    const currentWidth = header.getBoundingClientRect().width;

    // Avoid re-measuring on every shrink tick while already collapsed
    if (!force && !isWide && currentWidth <= lastCollapsedWidth) {
      return;
    }

    const wasOpen = isPopoverOpen(menu);

    header.classList.add('is-measuring');
    header.classList.add('is-wide');
    menu.removeAttribute('popover');

    const fits = headerInner.scrollWidth <= headerInner.clientWidth;

    if (fits) {
      lastCollapsedWidth = 0;
      menuButton?.setAttribute('aria-expanded', 'false');
    } else {
      header.classList.remove('is-wide');
      menu.setAttribute('popover', 'auto');
      lastCollapsedWidth = currentWidth;
      if (wasOpen && typeof menu.showPopover === 'function') {
        try {
          menu.showPopover();
        } catch {
          // Ignore if polyfill is still loading
        }
      }
    }

    requestAnimationFrame(() => {
      header.classList.remove('is-measuring');
    });
  };

  if (menuButton) {
    menu.addEventListener('toggle', (event) => {
      menuButton.setAttribute(
        'aria-expanded',
        String(event.newState === 'open')
      );
    });
  }

  menu.addEventListener('click', (event) => {
    if (
      !header.classList.contains('is-wide') &&
      event.target.closest('a') &&
      typeof menu.hidePopover === 'function'
    ) {
      try {
        menu.hidePopover();
      } catch {
        // Ignore if already closed
      }
    }
  });

  const resizeObserver = new ResizeObserver(() => updateNavLayout(false));
  resizeObserver.observe(header);
  resizeObserver.observe(menu);

  if (document.fonts?.ready) {
    document.fonts.ready.then(() => updateNavLayout(true));
  }

  updateNavLayout(true);
}

// Scroll-state sticky header fallback for browsers without @container scroll-state()
const scrollSentinel = document.querySelector('.scroll-sentinel');
if (header && scrollSentinel) {
  const stuckObserver = new IntersectionObserver(
    ([entry]) => {
      header.classList.toggle('is-stuck', !entry.isIntersecting);
    },
    { threshold: 0 }
  );
  stuckObserver.observe(scrollSentinel);
}

// Active section scrollspy using aria-current="location"
const navLinks = Array.from(document.querySelectorAll('#site-menu a[href^="#"]'));
const trackedSections = navLinks
  .map((link) => {
    const id = link.getAttribute('href').slice(1);
    const section = document.getElementById(id);
    return section ? { link, section } : null;
  })
  .filter(Boolean);

if (trackedSections.length > 0) {
  const setCurrentLink = (activeId) => {
    for (const { link, section } of trackedSections) {
      if (section.id === activeId) {
        link.setAttribute('aria-current', 'location');
      } else {
        link.removeAttribute('aria-current');
      }
    }
  };

  const sectionObserver = new IntersectionObserver(
    (entries) => {
      const visible = entries
        .filter((entry) => entry.isIntersecting)
        .sort((a, b) => b.intersectionRatio - a.intersectionRatio);

      if (visible.length > 0) {
        setCurrentLink(visible[0].target.id);
      } else if (window.scrollY < 160) {
        setCurrentLink(null);
      }
    },
    { rootMargin: '-25% 0px -60% 0px', threshold: [0.05, 0.25, 0.5] }
  );

  for (const { section } of trackedSections) {
    sectionObserver.observe(section);
  }
}

// Native <dialog> Invoker Commands fallback
if (!('commandForElement' in HTMLButtonElement.prototype)) {
  for (const trigger of document.querySelectorAll(
    'button[command="show-modal"][commandfor]'
  )) {
    trigger.addEventListener('click', () => {
      const targetId = trigger.getAttribute('commandfor');
      const dialog = targetId ? document.getElementById(targetId) : null;
      if (dialog && typeof dialog.showModal === 'function') {
        dialog.showModal();
      }
    });
  }
}

// Native <dialog closedby="any"> light-dismiss fallback (test pointer coordinates, not event.target)
if (!('closedBy' in HTMLDialogElement.prototype)) {
  const outside = (event, dialog) => {
    const rect = dialog.getBoundingClientRect();
    return (
      event.clientX < rect.left ||
      event.clientX > rect.right ||
      event.clientY < rect.top ||
      event.clientY > rect.bottom
    );
  };

  for (const dialog of document.querySelectorAll('dialog[closedby="any"]')) {
    let pressedOutside = false;
    dialog.addEventListener('pointerdown', (event) => {
      pressedOutside = outside(event, dialog);
    });
    dialog.addEventListener('pointerup', (event) => {
      if (pressedOutside && outside(event, dialog)) {
        dialog.close();
      }
    });
  }
}

// Clear stale returnValue when any dialog closes
for (const dialog of document.querySelectorAll('dialog')) {
  dialog.addEventListener('close', () => {
    dialog.returnValue = '';
  });
}
