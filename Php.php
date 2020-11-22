<html>
<head>
<title>Test PHP Connection Script</title>
</head>
<body>

<h3>Welcome to the PHP Connect Test</h3>

<?php
$dbname ='db';
$dbuser = 'Bagaskara';
$dbpass ='12345';
$dbhost ='localhost';
$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
$mysqli -> select_db($dbname) or die("Could not open the database '$dbname'");
$result = $mysqli ->query("SELECT data FROM db;");
$row = $result -> fetch_row();
echo "Default database is " . $row[1];

?>

</body>
</html>
