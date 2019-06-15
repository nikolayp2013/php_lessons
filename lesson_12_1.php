<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Работа с датой и временем
    //$date = date('Дата: d');
    date_default_timezone_set('Europe/Samara');
    echo time() . '<br>';
    //$date = date('Время - H:i:s');
    //$date = date('Время - H:i:s', time() + 3600 * 3); // время в секундах
    //$date = date('Время - H:i:s', time() + 3600 * 24 * 30);  // Плюс месяц от текущего момента
    $date = date('Время - H:i:s', time() + 3600 * 5);
    echo $date . '<br>';

    $date_now = new DateTime(); // объект данного класса
    //$date_now->modify('+1 hour');
    $date_now->modify('+5 day');
    echo $date_now->format('Время - H:i:s, l');
  ?>
</body>
</html>
