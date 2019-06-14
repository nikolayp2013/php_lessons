<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Комментарий на одну строку
    $number = 7;
    //echo "Переменная равна: $number";
    //echo 'Переменная равна: $number';
    $number = 12; // Integer
    $num = 4.6; // Float
    $res = $number + $num; // Integer + Float = Float
    //$word = 'Переменная равна: ';
    $word = 'Переменная равна: ' . $res;
    //echo 'Переменная равна: ' . $number;
    //echo $word . $res;
    $bool = true;
    //echo $word;
    //echo $bool;

    // Константы
    echo PHP_VERSION . "<br>";
    echo defined("PI")  . "<br>";
    define("PI", 3.14);
    echo defined("PI")  . "<br>";
    echo PI . "<br>";

    //$number = $number + 5;
    //$number += 5; // -=, /=, *=, %=
    //$number++; // $number += 1;
    $number--;
    echo $number . "<br>";

    $res = $number - $num;
    echo $res . "<br>";
    $res = $number / $num;
    echo $res . "<br>";
    $res = $number * $num;
    echo $res . "<br>";
    $res = $number % $num; // Остаток от деления
    echo $res . "<br>";
  ?>
</body>
</html>
