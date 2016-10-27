$host = "sqldatabaseserver4321.database.windows.net,1433";
$user = "admin4321";
$pwd = "admin4321";
$db = "sqldatabaseserver4321";
$sql = "CREATE TABLE registration_tb(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    date DATE)";
    $conn->query($sql);
