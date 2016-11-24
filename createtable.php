<?php
// DB connection info
$host = "tcp:sqldatabaseserver4321.database.windows.net,1433";
$user = "admin4321";
$pwd = "makkDR3748";
$db = "sqldatabase";
try{
    $conn = new PDO("sqlsrv:server = tcp:sqldatabaseserver4321.database.windows.net,1433; Database = sqldatabase", "admin4321", "admin4321");
    $conn->setAttribute
( PDO::ATTR_ERRMODE, 
PDO::ERRMODE_EXCEPTION );
    $sql = "CREATE TABLE registration_tbl(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    date DATE)";
    $conn->query($sql);
}
catch(Exception $e){
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
?>

