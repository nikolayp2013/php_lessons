<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Комментарий на одну строку
    for($i = 100; $i > 10; $i--) {
      //echo ($i + 1) . "<br>";
      if($i % 2 == 0)
        continue;
      if($i < 70)
        break;
      //echo $i . "<br>";
    }
    //echo '<br>';

    $i = 0;
    while($i < 10) {
      //echo $i . "<br>";
      $i++;
    }
    //echo '<br>';

    $i = 100;
    do {
      //echo '101';
    } while($i == 101);

    $arr = [5, 23, 9, 23.2, 8];
    $count = count($arr);
    for($i = 0; $i < $count; $i++) {
      echo 'Значение элемента ' . ($i + 1) . ' - ' . $arr[$i] . '<br>';
    }

    $i = 0;
    while($i < $count) {
      echo 'Значение ' . ($i + 1) . ' - ' . $arr[$i] . '<br>';
      $i++;
    }

    $i = 0;
    do {
      echo 'Значение в цикле while ' . ($i + 1) . ' - ' . $arr[$i] . '<br>';
      $i++;
    } while($i < $count);
  ?>
</body>
</html>
