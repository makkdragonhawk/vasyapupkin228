<?
try {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = date("Y-m-d");
    $pass = $_POST['passw'];
    // Insert data
    $sql_insert = 
"INSERT INTO reg_table (name, email, date, passw) 
                   VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql_insert);
    $stmt->bindValue(1, $name);
    $stmt->bindValue(2, $email);
    $stmt->bindValue(3, $date);
    $stmt->bindValue(4, $passw);
    $stmt->execute();
}
catch(Exception $e) {
    die(var_dump($e));
}
echo "<h3>Your're registered!</h3>";
}
  $sql_select = "SELECT * FROM reg_table";
$stmt = $conn->query($sql_select);
$registrants = $stmt->fetchAll(); 
if(count($registrants) > 0) {
    echo "<h2>People who are registered:</h2>";
    echo "<table>";
    echo "<tr><th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Date</th></tr>";
    foreach($registrants as $registrant) {
        echo "<tr><td>".$registrant['name']."</td>";
        echo "<td>".$registrant['email']."</td>";
        echo "<td>".$registrant['date']."</td></tr>";
        echo "<td>".$registrant['passw']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "<h3>No one is currently registered.</h3>";
}    ?>
