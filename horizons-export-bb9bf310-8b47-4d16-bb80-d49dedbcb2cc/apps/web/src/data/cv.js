export const cv = {
  identity: {
    name: 'Alex Morgan',
    handle: 'andycheng',
    role: 'Senior Full-Stack Engineer',
    tagline: 'I ship reliable software for ambitious teams.',
    location: 'Lisbon, PT',
    timezone: 'Europe/Lisbon',
    available: true,
    availabilityNote: 'Open to contract & advisory · Q3 2026',
    yearsExperience: 6,
    avatarInitials: 'AM',
  },

  about: [
    "I'm a senior full-stack engineer with 6+ years building products that quietly keep working at 3 a.m.",
    'I focus on the boring parts that make software great: clean data models, fast feedback loops, instrumentation, and team practices that survive growth.',
    'Currently freelancing on developer tools, infra, and AI-augmented internal apps — usually as the second engineer founders hire when the prototype starts paying rent.',
    'When I close the laptop: trail running, espresso geekery, and bad sci-fi novels.',
  ],

  currently: [
    'Shipping a TypeScript SDK for an AI eval startup (YC W26).',
    'Open to fractional Staff/CTO roles, 2 days/week.',
    'Reading "A Philosophy of Software Design" — again.',
  ],

  stats: [
    { label: 'years shipping', value: '6+' },
    { label: 'production deploys', value: '1.2k' },
    { label: 'avg uptime', value: '99.97%' },
    { label: 'coffees / day', value: '∞' },
  ],

  experience: [
    {
      title: 'Senior Full-Stack Engineer',
      company: 'Northwind Labs',
      companyUrl: 'https://northwind.dev',
      period: '2023 — Present',
      location: 'Remote (EU)',
      type: 'Full-time',
      stack: ['TypeScript', 'Next.js', 'tRPC', 'Postgres', 'AWS', 'Terraform'],
      highlights: [
        'Led the migration from a Rails monolith to a modular Next.js + tRPC stack — cut p95 latency from 840ms to 190ms.',
        'Designed the multi-tenant data model now serving 2.4M MAU with row-level security and zero customer data leaks.',
        'Built the internal feature-flag + experiment platform; teams ship 4× more A/B tests with no SRE involvement.',
        'Mentored a team of 6 engineers; introduced trunk-based dev, weekly architecture reviews, and on-call rotations.',
      ],
    },
    {
      title: 'Full-Stack Engineer',
      company: 'Halcyon',
      companyUrl: 'https://halcyon.io',
      period: '2021 — 2023',
      location: 'Berlin, DE',
      type: 'Full-time',
      stack: ['React', 'Node.js', 'GraphQL', 'MongoDB', 'GCP'],
      highlights: [
        'Shipped the realtime collaboration layer (CRDTs over WebSockets) — supports 80+ concurrent editors per doc.',
        'Owned the public REST + GraphQL APIs serving 500k+ requests/day at sub-200ms p95.',
        'Reduced infra bill 38% by replacing a self-managed Kafka cluster with managed Pub/Sub + DLQ patterns.',
        'Led the migration from Jenkins to GitHub Actions; deploys went from 22 min to 4 min.',
      ],
    },
    {
      title: 'Software Engineer',
      company: 'Pixelforge Studio',
      companyUrl: 'https://pixelforge.studio',
      period: '2020 — 2021',
      location: 'Vilnius, LT',
      type: 'Full-time',
      stack: ['Vue 3', 'Laravel', 'MySQL', 'Docker'],
      highlights: [
        'Delivered 14 client projects across e-commerce, fintech and SaaS — all on time, all still in production.',
        'Built the agency starter kit (Vue + Laravel + Tailwind) that cut new project bootstrap from 3 days to 2 hours.',
        'Wrote the internal QA playbook adopted across 3 teams; bug-leak rate dropped 61%.',
      ],
    },
    {
      title: 'Junior Developer',
      company: 'Freelance',
      companyUrl: null,
      period: '2019 — 2020',
      location: 'Remote',
      type: 'Contract',
      stack: ['JavaScript', 'PHP', 'WordPress', 'Figma'],
      highlights: [
        'Built 20+ marketing sites, landing pages and small SaaS MVPs for early-stage founders.',
        'Learned the unglamorous skills: writing proposals, scoping, and saying no.',
      ],
    },
  ],

  education: [
    {
      degree: "M.Sc. Computer Science",
      university: 'Delft University of Technology',
      year: '2019',
      field: 'Distributed Systems & Machine Learning',
      thesis: 'Eventual consistency in collaborative editing CRDTs',
      gpa: '8.4 / 10',
    },
    {
      degree: "B.Sc. Software Engineering",
      university: 'Vilnius University',
      year: '2017',
      field: 'Software Engineering',
      thesis: 'Static analysis tooling for Go microservices',
      gpa: '9.1 / 10',
    },
  ],

  certifications: [
    { name: 'AWS Solutions Architect — Professional', year: '2024' },
    { name: 'CKA — Certified Kubernetes Administrator', year: '2023' },
    { name: 'Stripe Certified Developer', year: '2022' },
  ],

  skills: {
    languages: ['TypeScript', 'JavaScript', 'Python', 'Go', 'SQL', 'Bash'],
    frontend: ['React', 'Next.js', 'Vue 3', 'Tailwind', 'Framer Motion', 'Radix UI'],
    backend: ['Node.js', 'tRPC', 'GraphQL', 'Postgres', 'Redis', 'Prisma'],
    infrastructure: ['AWS', 'GCP', 'Terraform', 'Docker', 'Kubernetes', 'GitHub Actions'],
    tooling: ['Vite', 'Turborepo', 'Playwright', 'Vitest', 'Sentry', 'Datadog'],
    soft: ['Mentoring', 'Technical writing', 'Architecture reviews', 'Discovery workshops'],
  },

  projects: [
    {
      name: 'pulsewave',
      tagline: 'Realtime collaborative whiteboard with CRDT engine.',
      description: 'A Miro-style canvas built on Yjs and PartyKit. Open-source, 4.2k stars on GitHub.',
      url: 'https://pulsewave.app',
      repo: 'github.com/alexmorgan/pulsewave',
      stack: ['Next.js', 'Yjs', 'PartyKit', 'Postgres'],
      year: 2025,
      status: 'live',
    },
    {
      name: 'lighthaus',
      tagline: 'Self-hosted Lighthouse CI dashboard.',
      description: 'Drop-in tool for product teams who care about Core Web Vitals across hundreds of routes.',
      url: 'https://lighthaus.dev',
      repo: 'github.com/alexmorgan/lighthaus',
      stack: ['Remix', 'SQLite', 'Fly.io'],
      year: 2024,
      status: 'live',
    },
    {
      name: 'driftlog',
      tagline: 'Postgres schema drift detector for monorepos.',
      description: 'CLI + GitHub action that flags risky migrations before they hit main. Used by 40+ teams.',
      url: 'https://driftlog.sh',
      repo: 'github.com/alexmorgan/driftlog',
      stack: ['Go', 'Postgres'],
      year: 2024,
      status: 'live',
    },
    {
      name: 'tinycron',
      tagline: '~120 LOC cron expression parser, zero deps.',
      description: 'Tiny, fast, MIT-licensed. 180k npm downloads / month.',
      url: 'https://npm.im/tinycron',
      repo: 'github.com/alexmorgan/tinycron',
      stack: ['TypeScript'],
      year: 2023,
      status: 'maintained',
    },
  ],

  contact: {
    email: 'alex@morgan.dev',
    phone: '+1 (555) 123-4567',
    calendar: 'https://cal.com/alexmorgan/intro',
    location: 'Lisbon, Portugal',
  },

  social: [
    { label: 'GitHub', handle: '@alexmorgan', url: 'https://github.com/alexmorgan' },
    { label: 'LinkedIn', handle: 'in/alexmorgan', url: 'https://linkedin.com/in/alexmorgan' },
    { label: 'X', handle: '@alexmorgan_dev', url: 'https://x.com/alexmorgan_dev' },
    { label: 'Read.cv', handle: 'read.cv/alexmorgan', url: 'https://read.cv/alexmorgan' },
  ],

  meta: {
    lastUpdated: '2026-04-21',
    version: '4.2.0',
    license: 'MIT',
    repo: 'github.com/alexmorgan/cv',
  },
};

export const FILES = [
  { id: 'about', name: 'about.md', path: 'src/about.md', language: 'markdown', icon: 'md' },
  { id: 'experience', name: 'experience.json', path: 'src/experience.json', language: 'json', icon: 'json' },
  { id: 'education', name: 'education.yml', path: 'src/education.yml', language: 'yaml', icon: 'yml' },
  { id: 'skills', name: 'skills.ts', path: 'src/skills.ts', language: 'typescript', icon: 'ts' },
  { id: 'projects', name: 'projects.tsx', path: 'src/projects.tsx', language: 'tsx', icon: 'tsx' },
  { id: 'contact', name: 'contact.sh', path: 'src/contact.sh', language: 'shell', icon: 'sh' },
];