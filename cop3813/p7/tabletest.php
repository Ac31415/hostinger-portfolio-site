<?php
require_once './php/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DB Table Test</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1>Database Table Test</h1>
      </div>
        
 



<?php
// Create table with two columns: id and value
$createStmt = 'CREATE TABLE `BABYNAMES` (' . PHP_EOL
            . '  `Name` varchar(50) NOT NULL,' . PHP_EOL
            . '  `Gender` varchar(1) NOT NULL,' . PHP_EOL
            . '  `Votes` integer' . PHP_EOL
//            . '  PRIMARY KEY (`Name`)' . PHP_EOL
            . ') ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
?>
      <div id="step-one" class="well">
        <h3>Step One <small>Creating the table</small></h3>
        <pre><?php echo $createStmt; ?></pre>
<?php
if($db->query($createStmt)) {
    echo '        <div class="alert alert-success">Table creation successful.</div>' . PHP_EOL;
} else {
    echo '        <div class="alert alert-danger">Table creation failed: (' . $db->errno . ') ' . $db->error . '</div>' . PHP_EOL;
    exit(); // Prevents the rest of the file from running
}
?>
      </div>

        
<div id="step-two" class="well">
        <h3>Step Two <small>Inserting into the table</small></h3>
<?php
// Add two rows to the table
//$insertStmt = 'INSERT INTO `TEST` (`id`, `value`)' . PHP_EOL
//            . '  VALUES (NULL, \'Test 1\'),' . PHP_EOL
//            . '   (NULL, \'Lorem Ipsum\');';
        
$open = fopen('yob2018.txt','r');
 
while (!feof($open)) 
{
	$getTextLine = fgets($open);
	$explodeLine = explode(',',$getTextLine);
	
//	list($name,$sex,$votes) = $explodeLine;
    list($name,$sex,$votes) = array_pad(explode(',', $getTextLine, 3), 3, null);
	
//	$insertStmt = "insert into empoyee_details (name, city,postcode,job_title) values('".$name."','".$sex."','".$votes."')";
    
    $insertStmt = 'INSERT INTO `BABYNAMES` (`Name`, `Gender`, `Votes`)' . PHP_EOL
            . '  VALUES ("'.$name.'","'.$sex.'","'.$votes.'")';
    
    echo $insertStmt;
    
    if($db->query($insertStmt)) {
    echo '        <div class="alert alert-success">Values inserted successfully.</div>' . PHP_EOL;
} else {
    echo '        <div class="alert alert-danger">Value insertion failed: (' . $db->errno . ') ' . $db->error . '</div>' . PHP_EOL;
    exit();
}
}
 
fclose($open);
?>
<!--
      <div id="step-two" class="well">
        <h3>Step Two <small>Inserting into the table</small></h3>
        <pre><?php echo $insertStmt; ?></pre>
-->
<?php
//if($db->query($insertStmt)) {
//    echo '        <div class="alert alert-success">Values inserted successfully.</div>' . PHP_EOL;
//} else {
//    echo '        <div class="alert alert-danger">Value insertion failed: (' . $db->errno . ') ' . $db->error . '</div>' . PHP_EOL;
//    exit();
//}
?>
      </div>

<?php
// Get the rows from the table
//$selectStmt = 'SELECT * FROM `BABYNAMES`;';
//        $selectStmt = 'SELECT TOP 10 * FROM `BABYNAMES`' . PHP_EOL . 'ORDER BY `Votes` DESC;';
        
//        $selectStmt = 'SELECT TOP 10 * FROM `BABYNAMES`;';
        
                $selectStmt = 'SELECT * FROM `BABYNAMES`' . PHP_EOL . 'ORDER BY `Votes` DESC LIMIT 10;';
?>
      <div id="step-three" class="well">
        <h3>Step Three <small>Retrieving the rows</small></h3>
        <pre><?php echo $selectStmt; ?></pre>
<?php
$result = $db->query($selectStmt);
if($result->num_rows > 0) {
    echo '        <div class="alert alert-success">' . PHP_EOL;
    while($row = $result->fetch_assoc()) {
        echo '          <p>Name: ' . $row["Name"] . ' - Gender: ' . $row["Gender"] . ' - Votes: ' . $row["Votes"] . '</p>' . PHP_EOL;
    }
    echo '        </div>' . PHP_EOL;
} else {
    echo '        <div class="alert alert-success">No Results</div>' . PHP_EOL;
}
?>
      </div>

<?php
// Drop the TEST table now that we're done with it
$dropStmt = 'DROP TABLE `BABYNAMES`;';
?>
      <div id="step-four" class="well">
        <h3>Step Four <small>Dropping the table</small></h3>
        <pre><?php echo $dropStmt; ?></pre>
<?php
if($db->query($dropStmt)) {
    echo '        <div class="alert alert-success">Table drop successful.</div>' . PHP_EOL;
} else {
    echo '        <div class="alert alert-danger">Table drop failed: (' . $db->errno . ') ' . $db->error . '</div>' . PHP_EOL;
    exit();
}
?>
      </div>

    </div>
  </body>
</html>

