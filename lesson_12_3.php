<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Функции для работы с переменными
    //$x = [];
    $x = 12.34;
    echo 'Цифра ли? ' . is_numeric($x) . '<br>';
    echo 'Целое ли число? ' . is_integer($x) . '<br>';
    echo 'Дробное ли число? ' . is_double($x) . '<br>';
    echo 'Строка ли эта переменная? ' . is_string($x) . '<br>';
    echo 'Является ли переменная Boolean - ' . is_bool($x) . '<br>';
    echo 'Является ли переменная массовом - ' . is_array($x) . '<br>';
    echo 'Проверяет тип переменной - ' . gettype($x) . '<br>';
  ?>
</body>
</html>
