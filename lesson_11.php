<?php
  //session_start();
  setcookie("email", $_POST['email'], time() - 3600);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <form action="/action.php" method="post">
    Имя
    <input type="text" name="name"><br>
    Email
    <input type="email" name="email"><br>
    <button type="submit">Отправить</button>
  </form>
  <?php
    // Комментарий на одну строку
    // Уничтожает сессию
    // session_destroy();
    // if($_SESSION['name'] !="" || $_SESSION['email'] !="") {
    //   echo 'Имя пользователя: ' . $_SESSION['name'] . '<br>';
    //   echo 'Email пользователя: ' . $_SESSION['email'] . '<br>';
    // }

    if($_COOKIE['name'] !="" || $_COOKIE['email'] !="") {
      echo 'COOKIE: Имя пользователя: ' . $_COOKIE['name'] . '<br>';
      echo 'COOKIE: Email пользователя: ' . $_COOKIE['email'] . '<br>';
    }
  ?>
</body>
</html>
