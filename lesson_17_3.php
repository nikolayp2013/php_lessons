<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Комментарий на одну строку
    // абстрактные классы - это те классы на основе которых нельзя создать объекты
    // все абстрактные методы должны быть реализованы в классах наследниках
    abstract class Car {
      protected $speed;
      protected $color;

      abstract protected function showInfo();
    }

    class BMW extends Car {
      function __construct($speed) {
        $this->speed = $speed;
      }
      public function showInfo() {
        echo "Скорость автомобиля: " . $this->speed . '<br>';
      }
    }

    $m3 = new BMW(240);
    $m3->showInfo();
  ?>
</body>
</html>
