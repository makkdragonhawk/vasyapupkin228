$host = "tcp:qagmpmy2wy.database.windows.net,1433";
$user = "efremov@qagmpmy2wy";
$pwd = "password";
$db = "efremovAu91BFbnU";
$sql = "CREATE TABLE registration_tb(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    date DATE)";
    $conn->query($sql);
