<?
// Страница авторизации

# Соединямся с БД
$conn = new PDO("sqlsrv:server = tcp:sqldatabase2.database.windows.net,1433; Database = sqldatabase2", "makkdragonhawk", "makkDR3748");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['submit']))
{
    # Вытаскиваем из БД запись, у которой логин равняеться введенному
  $query = mysqli_query($conn,"SELECT name, passw FROM reg_table WHERE name='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);


    # Сравниваем пароли
    if($data['passw'] === $_POST['password'])
    {
        echo "$query";
     print "Вы ввели правильный логин/пароль";
    }
    else
    {
        echo "$query";
     print "Вы ввели неправильный логин/пароль";
    }
}
?>
<form method="POST">
Логин <input name="login" type="text"><br>
Пароль <input name="password" type="password"><br>
<input name="submit" type="submit" value="Войти">
</form>
