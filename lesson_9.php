<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <!--<form action="" method="post">-->
  <form action="/check.php" method="get">
    <label for="name">Имя</label>
    <input type="text" name="name"><br>
    <label for="email">Email</label>
    <input type="email" name="email"><br>
    <button type="submit">Отправить</button>
    <!-- submit - делает чтобы страничка перезагружалась -->
  </form>
  <?php
    // Комментарий на одну строку
    // При отправке данных методом post все данные отправляются незаметно для пользователя
    /*if($_POST['name'] == "")
      echo 'Введите ваше имя<br>';
    else
      echo $_POST['name'] . '<br>';
    if($_POST['email'] == "")
      echo 'Введите ваш email<br>';
    else
      echo $_POST['email'];*/
    // При отправке данных методом get все данные находятся в url адресе
    echo $_GET['some'];
    /*if($_GET['name'] == "")
      echo 'Введите ваше имя<br>';
    else
      echo $_GET['name'] . '<br>';
    if($_GET['email'] == "")
      echo 'Введите ваш email<br>';
    else
      echo $_GET['email'];*/
  ?>
</body>
</html>
