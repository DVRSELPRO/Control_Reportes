<!DOCTYPE html>
<?php
$db_handle = pg_connect("host=localhost dbname=postgres port=5433 user=postgres password=upjha3dA");
//pg_query("create table testing2(id integer, name text)");
//pg_query("insert into testing2 (id, name) values (3,'Dearcia')");
if ($db_handle) {

echo 'Connection attempt succeeded.';

} else {

   

echo 'Connection attempt failed.';

}

echo "<h3>Connection Information</h3>";

echo "DATABASE NAME:" . pg_dbname($db_handle) . "<br>";

echo "HOSTNAME: " . pg_host($db_handle) . "<br>";

echo "PORT: " . pg_port($db_handle) . "<br>";

echo "<h3>Checking the query status</h3>";

$query = "SELECT * FROM testing2";

$result = pg_exec($db_handle, $query);

if ($result) {

echo "The query executed successfully.<br>";

echo "<h3>Print all rows of table tsting:</h3>";

for ($row = 0; $row < pg_numrows($result); $row++) {

$fname = pg_result($result, $row, 'name');

echo $fname ." ";
echo "<br>";
//$lastname = pg_result($result, $row, 'lname');

//echo $lastname ."<br>";

}

} else {

echo "The query failed with the following error:<br>";

echo pg_errormessage($db_handle);

}

pg_close($db_handle);

?>
<a href="tables-responsive.php">--- REPORTES --- </a>
<a href="tables-responsive.php">Visita Domiciliaria </a>
<a href="tables-responsive.php">Módulos </a>
<a href="tables-responsive.php">Contributel </a>