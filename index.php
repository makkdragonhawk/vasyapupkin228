<?
// Страница авторизации

# Функция для генерации случайной строки
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

# Соединямся с БД
$conn = new PDO("sqlsrv:server = tcp:sqldatabase2.database.windows.net,1433; Database = sqldatabase2", "makkdragonhawk", "makkDR3748");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['submit']))
{
    # Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($conn,"SELECT name, passw FROM users WHERE user_login='".mysqli_real_escape_string($conn,$_POST['name'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    # Сравниваем пароли
    if($data['passw'] === ($_POST['passw']))
    {
       print "Вы вошли";
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
?>
<form method="POST">
Логин <input name="login" type="text"><br>
Пароль <input name="password" type="passw"><br>
Не прикреплять к IP(не безопасно) <input type="checkbox" name="not_attach_ip"><br>
<input name="submit" type="submit" value="Войти">
</form>
