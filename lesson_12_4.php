<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Функции для работы со строками
    $str = "Пример обычной строки";

    echo strlen($str) . '<br>'; // длина строки
    echo strpos($str, "При") === false ? '\'При\' не найдено' : '\'При\' найдено'; // позиция вхождения подстроки в страку
    echo '<br>';
    echo substr($str, 4, 9) . '<br>'; // обрезка строки в кирилице 1 символ идет как 2 символа при обрезке
    //echo substr($str, 4, -2) . '<br>';
    //echo mb_strtolower($str); //. '<br>' . mb_strtoupper($str) . '<br>';
    //echo mb_strtolower($str,'utf-8');
    echo trim("         <pre>просто         текст с пробелами</pre>       ");
  ?>
</body>
</html>
