<?
// Страница авторизации


$host = "localhost\sqlexpress";
$user = "makkdragonhawk";
$pwd = "makkDR3748";
$db = "sqldatabase2";

# Соединямся с БД
$conn = new PDO("sqlsrv:server = tcp:sqldatabase2.database.windows.net,1433; Database = sqldatabase2", "makkdragonhawk", "makkDR3748");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Connect to database.
/*try {
    $conn = new PDO("sqlsrv:server = tcp:sqldatabase2.database.windows.net,1433; Database = sqldatabase2", "makkdragonhawk", "makkDR3748");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
*/

if(isset($_POST['submit']))
{
# Вытаскиваем из БД запись, у которой логин равняеться введенному
$query = mysqli_query($conn,"SELECT name, passw FROM reg_table WHERE name='".$_POST['login']."' LIMIT 1");
$data = mysqli_fetch_array($query);
  print_r($data);
/*  $sql = "SELECT name, passw FROM reg_table WHERE name=`".$_POST['login']."` LIMIT 1";
  $stmt = $conn->query($sql) or die("query err");
  $stmt->setFetchMode(PDO::FETCH_ASSOC) or die("res err"); 
*/
   
    /*
    if(count($res) > 0) {
        foreach($res as $r) {
         echo "<br>Логин ".$r['passw']."<br>";
        }
    } else {
        echo "no login";
    }
  */
/*
# Сравниваем пароли
if($data['passw'] === $_POST['password'])
{
print "Вы ввели правильный логин/пароль";
}
else
{
print "Вы ввели неправильный логин/пароль";
}
  
  echo "<br>база ".$data['passw']."<br>";
  echo "пост ".$_POST['password']."<br>";
  */
}
?>
<form method="POST">
Логин <input name="login" type="text"><br>
Пароль <input name="password" type="password"><br>
<input name="submit" type="submit" value="Войти">
</form>
