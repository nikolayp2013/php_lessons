<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Комментарий на одну строку
    // интерфейсы
    // в PHP нет множественного наследования
    // для решения мультинаследования были придуманы интерфейсы
    // в интерфейсах описываются отдельные функции которые затем будут реализовываться в классах наследниках
    interface Human {
      public function talk();
      public function walk();
    }
    // интерфейсы могут наследовать другие интерфейсы
    interface Mutant extends Human {
      public function fly();
    }

    //class Person implements Human, Mutant {
    class Person implements Mutant {
      function talk() {
        echo 'Человек говорит<br>';
      }
      function walk() {
        echo 'Человек ходит<br>';
      }
      function fly() {
        echo 'Мутан умеет летать<br>';
      }
    }

    $bob = new Person();
    $bob->talk();
    $bob->walk();
    $bob->fly();
  ?>
</body>
</html>
