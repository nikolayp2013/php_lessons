<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Комментарий на одну строку
    // require - подгружает файл, если не найден будет ошибка
    //require 'header.php';
    // include - подключает файл, если не найден ошибка, но код будет дальше выполняться
    //include 'header1.php';
    // require_once - подключает файл, если не найден также будет ошибка но файл будет подключен только один раз
    //require_once 'header.php';
    //require_once 'header.php';
    // include_once - тоже самое, только код будет дальше выполняться
    include_once 'header.php';
    include_once 'header.php';
    echo 'Основная часть сайта';
    require 'footer.php';
  ?>
</body>
</html>
