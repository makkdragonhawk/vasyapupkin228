
<?php  
    $conn = new PDO("sqlsrv:server = tcp:sqldatabase2.database.windows.net,1433; Database = sqldatabase2", "makkdragonhawk", "makkDR3748");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['submit'])){ //выполняем нижеследующий код, только если нажата кнопка 
if(empty($_POST['name'])){ //если переменная логина пуста или не существует  
echo"Вы не ввели логин"; // выводим сообщение об ошибке  
  }elseif(!preg_match("/[-a-zA-Z0-9]{3,15}/", $_POST['name'])){ //если переменная не соответствует шаблону -a-zA-Z0-9  
echo"Вы неправильно ввели логин"; // выводим сообщение об ошибке   
  }elseif(empty($_POST['passw'])){ //если переменная логина пуста или не существует  
echo"Вы не ввели пароль"; // выводим сообщение об ошибке  
  }elseif(!preg_match("/[-a-zA-Z0-9]{3,30}/", $_POST['passw'])){ //если переменная не соответствует шаблону -a-zA-Z0-9  
echo"Вы неправильно ввели пароль"; // выводим сообщение об ошибке   
  }else{  
  $name = $_POST['name']; //присваеваем переменную  
  $passw = md5($_POST['passw']);//присваеваем переменную и кодируем её в md5 для безопасности  
  $query = mysql_query("SELECT * FROM `name`  WHERE `name`='$name' AND `passw`='$passw'"); //отправляем запрос на выборку всего содержимого , где поле логин равно переменной $login, а поле password равно переменной $password  
  $row = mysql_num_rows($query); // считаем количество рядов результата запроса  
  if($row > 0){ //если их больше 0  
  echo "Вы успешно авторизовались!"; // выводим сообщение об удачной авторизации!  
  }else{  
  echo "Неправильный логин или пароль!"; // выводим сообщение об ошибке!  
  }  
   
  }  
}  
?>
