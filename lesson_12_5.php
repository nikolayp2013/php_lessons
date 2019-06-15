<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Математические функции
    $some = -15;
    echo abs($some) . '<br>'; /* модуль числа */
    $num = 23.84;
    echo round($num) . '<br>';
    echo ceil($num) . '<br>'; /* всегда откругляет число в большую сторону */
    echo floor($num) . '<br>'; /* всегда округляет числов меньшую сторону*/

    echo mt_rand(1, 20) . '<br>'; /* случайное число в заданном диапазоне */
    $arr = [12, 23, -2, -5, 19, -4, 0];
    echo min($arr) . '<br>';
    echo min(12, 23, -2, -5, 19, -4, 0) . '<br>';
    echo max(12, 23, -2, -5, 19, -4, 0) . '<br>';

    $z = 1;
    echo sin($z) . '<br>';
    echo sin($z) . '<br>';
    echo sin($z) . '<br>';
    echo 1 / tan($z) . '<br>'; /* выдает ctg этого числа*/
  ?>
</body>
</html>
