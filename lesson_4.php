<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Комментарий на одну строку

    // === - оператор эквивалентности (также проверяетна тип данных)
    echo "" === false ? "True" : "False";

    $x = 89;
    $y = 12;
    $bool = false;
  if (($x != $y && !$bool) || !$x /*$bool != false*/) { // == != > < >= <=  &&(И)  ||(ИЛИ)
      //echo 'Переменные не равны';
      echo 'Переменная х больше за у';
    }
  echo "<br>";

  if ($x == 12) {
    echo 'Сработала первая проверка';
  } else if ($x == 89) {
      if($x > 59)
        echo '$x > 59<br>';
    echo 'Сработала 1.5 проверка';
  }
  else {
    echo 'Сработала вторая проверка';
  }

  //echo $x == 89 ? "true" : "false";
  $number = $x == 89 ? "true" : "false";
  echo $number;
  echo "<br><br>";

  $num = 40;
  switch($num) {
    case "56":
      echo '$num = "56"';
      break;
    case 5:
      echo '$num = 5';
      break;
    case 4:
      echo '$num = 4';
      break;
    case "5":
      echo '$num = "5"';
      break;
    default:
      echo 'Error';
  }
  ?>
</body>
</html>
