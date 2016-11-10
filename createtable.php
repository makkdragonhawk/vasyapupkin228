<?php
$host = "sqldatabaseserver4321.database.windows.net,1433";
$user = "admin4321";
$pwd = "admin4321";
$db = "sqldatabase";
$sql = "CREATE TABLE registration_tb(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    date DATE)";
    $conn->query($sql) || die("error");

//Server: sqldatabaseserver4321.database.windows.net,1433 \r\nSQL Database: sqldatabase\r\nUser Name: admin4321\r\n\r\nPHP Data Objects(PDO) Sample Code:\r\n\r\ntry {\r\n   $conn = new PDO ( \"sqlsrv:server = tcp:sqldatabaseserver4321.database.windows.net,1433; Database = sqldatabase\", \"admin4321\", \"{your_password_here}\");\r\n    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );\r\n}\r\ncatch ( PDOException $e ) {\r\n   print( \"Error connecting to SQL Server.\" );\r\n   die(print_r($e));\r\n}\r\n\rSQL Server Extension Sample Code:\r\n\r\n$connectionInfo = array(\"UID\" => \"admin4321@sqldatabaseserver4321\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"sqldatabase\", \"LoginTimeout\" => 30, \"Encrypt\" => 1, \"TrustServerCertificate\" => 0);\r\n$serverName = \"tcp:sqldatabaseserver4321.database.windows.net,1433\";\r\n$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
