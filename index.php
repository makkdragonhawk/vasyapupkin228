<?
// Страница авторизации

# Соединямся с БД
$conn = new PDO("sqlsrv:server = tcp:sqldatabase2.database.windows.net,1433; Database = sqldatabase2", "makkdragonhawk", "makkDR3748");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['submit']))
{
# Вытаскиваем из БД запись, у которой логин равняеться введенному
//$query = mysqli_query($conn,"SELECT name, passw FROM reg_table WHERE name='".mysqli_real_escape_string($conn,$_POST['login'])."' LIMIT 1");
  $query = mysql_query($conn,"SELECT name, passw FROM reg_table WHERE name='".mysqli_real_escape_string($conn,$_POST['login'])."' LIMIT 1");
  $data = mysql_fetch_array($query);
  
  $sql = "SELECT name, passw FROM reg_table WHERE name='".mysqli_real_escape_string($conn,$_POST['login'])."' LIMIT 1";
   $q = $conn->query($sql) or die("failed!");
while($r = $q->fetch(PDO::FETCH_ASSOC)){
  echo $r['passw'];
}
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
}
?>
<form method="POST">
Логин <input name="login" type="text"><br>
Пароль <input name="password" type="password"><br>
<input name="submit" type="submit" value="Войти">
</form>
