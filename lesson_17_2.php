<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Комментарий на одну строку
    // трейты - это специальная технология которая позволяет использовать код повторно
    trait PrintSome {
      public function talk() {
        echo "Привет мир!<br>";
      }

      public function sayBye() {
        echo "Пока всем<br>";
      }
    }

    trait Testing {
      public function some() {
        echo "Работа тестовой функции<br>";
      }
    }

    // трейты можно встраивать в различные классы
    class Test {
      use PrintSome, Testing;
    }

    class Test_2 {
      use PrintSome;
    }

    $obj = new Test();
    $obj->talk();
    $obj->sayBye();
    $obj->some();

    $obj_2 = new Test_2();
    $obj_2->talk();
    $obj_2->sayBye();
  ?>
</body>
</html>
