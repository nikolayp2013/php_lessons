<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Комментарий на одну строку
    // обратиться к функции можно только после ее создания
    $words = "Привет";
    //echo 'Результат: ' . $words . '<br>';

    function math($x, $y, $a) {
      global $words;
      echo 'Результат: ' . $words . '<br>';
      $res = $x + $y + $a;
      printSome($res);
      return $res;
    }
    // static - статическая переменная, сохраняет значение после выхода из функции
    function printSome($text, $num = 7) {
      static $num = 0;
      $num++;
      echo 'Значение переменной $num' . $num . '<br>';
      echo 'Функция вызвана<br>' . $text . '<br>';
      echo ($num * 2) . '<br>';
    }
    $word = 'Просто текст';
    printSome($word, 10);
    printSome("Привет мир");
    printSome($word, 15);

    $result = math(5, 7, 8);
    echo '<br>Результат сложения: ' . $result;
  ?>
</body>
</html>
