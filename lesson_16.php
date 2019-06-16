<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Комментарий на одну строку
    // полиморфизм - это свойство, когда мы можем переопределять методы
    // инкапсуляция позволяет скрывать различные параметры от пользователя
    class Car {
      protected $speed;
      protected $wheels;
      protected $color;

      function __construct($speed, $color) {
        $this->speed = $speed;
        $this->color = $color;
      }

      function showInfo() {
        echo "Скорость автомобиля: " . $this->speed . '<br>';
      }
    }

    // extends - класс BMW унаследовал от класса Car
    class BMW extends Car {
        private $model;

        function __construct($speed, $color, $model) {
          // передаем параметр в родительский конгструктор
          parent::__construct($speed,$color);
          $this->model = $model;
        }

        function showInfo() {
          echo "Скорость автомобиля: " . $this->speed . '<br>';
          echo "Модель автомобиля:  " . $this->model . '<br>';
          echo "Цвет автомобиля:  " . $this->color . '<br>';
        }

        // function setModel() {
        //   //$this->model = $model;
        //   echo "Модель автомобиля:  " . $this->model . '<br>';
        //   echo "Цвет автомобиля:  " . $this->color . '<br>';
        // }
    }

    class Audi extends Car {}

    $m3 = new BMW(340, "Белый", "M3");
    //$m3->speed = 340;
    $m3->showInfo();
    //$m3->setModel();

    $x5 = new BMW(250, "Синий", "X5");
    //$x5->speed = 250;
    $x5->showInfo();
    //$x5->setModel();
  ?>
</body>
</html>
