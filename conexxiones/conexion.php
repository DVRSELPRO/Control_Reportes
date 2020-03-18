<!DOCTYPE html>
<?php
$db_handle = pg_connect("host='189.207.247.244' dbname=allie_predial port=5432 user=postgres password='allie2019$'");
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

$query = "SELECT * FROM cdmx_cp";

$result = pg_exec($db_handle, $query);

if ($result) {

echo "The query executed successfully.<br>";

echo "<h3>Print all rows of table testing:</h3>";

for ($row = 0; $row < pg_numrows($result); $row++) {

 $d_tipo = pg_result($result, $row, 'd_tipo_asenta');

echo $d_tipo .", ";
//echo "<br>";

$d_ase = pg_result($result, $row, 'd_asenta');

echo $d_ase ."<br>";

}

} else {

echo "The query failed with the following error:<br>";

echo pg_errormessage($db_handle);

}

pg_close($db_handle);

?>
