<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Комментарий на одну строку
    $x = 0;
    // Одномерный массив (индексы числами)
    $arr_1 = array($x, 4, 6, "Some", true, 6.8);
    //$arr_1 = array();
    $arr_2 = [5, 7];
    $arr_1[0] = 5;
    echo $arr_1[0];
    echo "<br>";

    // Двумерный массив
    //$arr_3 = array(array(324, 7, 12), array(324, 7, 12));
    $arr_3 = array(array(324, 7, 12), array("Test"), array("12", 6, 7, 9));
    $arr_3[1][2] = 6;
    echo $arr_3[1][2];
    echo "<br>";

    // Ассоциативный массив (индексы (ключи) словами)
    $arr_4 = array("short" => "Dict", "long" => "Dictnary", "123" => 123);
    $arr_4["long"] = "Dictionary";
    echo $arr_4["long"];
    echo "<br>";

    // цикл foreach - используется только для перебора ассоативного массива
    foreach($arr_4 as $key => $value) {
      echo 'Ключ: ' . $key . ', значение: ' . $value . '<br>';
    }
  ?>
</body>
</html>
