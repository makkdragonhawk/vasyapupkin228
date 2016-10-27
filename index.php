<html>
<head>
<Title>Registration Form</Title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
    body { background-color:
 #fff; border-top: solid 10px #000;
 color: #333; font-size: .85em;
 margin: 20; padding: 20;
 font-family: "Segoe UI",
 Verdana, Helvetica, Sans-Serif;}
    h1, h2, h3,{ color: #000; 
margin-bottom: 0; padding-bottom: 0; }
    h1 { font-size: 2em; }
    h2 { font-size: 1.75em; }
    h3 { font-size: 1.2em; }
    table { margin-top: 0.75em; }
    th { font-size: 1.2em;
 text-align: left; border: none; padding-left: 0; }
    td { padding: 0.25em 2em 0.25em 0em; 
border: 0 none; }
</style>
</head>
  <body>
<h1>Регистрация</h1>
<p>Заполните ваше имя и адрес электронной почты, затем нажмите кнопку Отправить, чтобы зарегистрироваться.</p>
<form method="post" action="index.php" 
enctype="multipart/form-data" >
       Имя  <input type="text" 
name="name" id="name"/></br>
      Email <input type="text" 
name="email" id="email"/></br>
      <input type="submit" 
name="submit" value="Отправить" />
</form>

<?php
Server: sqldatabaseserver4321.database.windows.net,1433 \r\nSQL Database: sqldatabase\r\nUser Name: admin4321\r\n\r\nPHP Data Objects(PDO) Sample Code:\r\n\r\ntry {\r\n   $conn = new PDO ( \"sqlsrv:server = tcp:sqldatabaseserver4321.database.windows.net,1433;
Database = sqldatabase\", \"admin4321\", \"{your_password_here}\");\r\n   
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );\r\n}\r\ncatch ( PDOException $e ) {\r\n   print( \"Error connecting to SQL Server.\" );\r\n   die(print_r($e));\r\n}\r\n\rSQL Server Extension Sample Code:\r\n\r\n$connectionInfo = array(\"UID\" => \"admin4321@sqldatabaseserver4321\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"sqldatabase\", \"LoginTimeout\" => 30, \"Encrypt\" => 1, \"TrustServerCertificate\" => 0);\r\n$serverName = \"tcp:sqldatabaseserver4321.database.windows.net,1433\";
\r\n$conn = sqlsrv_connect($serverName, $connectionInfo);
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
