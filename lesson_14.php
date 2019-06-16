<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Комментарий на одну строку
    /* модификаторы доступа: public, protected, private */
    // protected видна в данном классе и классах наследниках
    class User {
      // константы в классе
      const PASS = "password";

      public $name;
      private $surname = "None";
      private $email;
      private $login;
      private $pass;

      function __construct($name, $surname, $login) {
        $this->name = $name;
        $this->surname = $surname;
        $this->login = $login;

        // при обращении к констанке внутри класса нужно использовать не this, а self
        echo self::PASS . '<br>';
        $this->showAll("Пользователь: ");
      }

      function showAll($text = "") {
        echo $text . $this->name . ", " . $this->surname . '<br>';
      }

      function getSurname() {
        return $this->surname;
      }

      function __destruct() {
        print 'Уничтожается ' . __CLASS__ . '<br>';
        //echo 'Уничтожается ' . __CLASS__ . '<br>';
      }
    }

    /* Конструкторы позволяют задавать определенные значения объекта сразу при его создании */

    $admin = new User("John", "Marley", "Admin");
    //$admin->name = "John";
    //$admin->surname = "Marley";
    //$admin->showAll("Пользователь: ");
    //echo $admin->name;
    $str = $admin->getSurname();
    echo $str;
    echo '<br>';

    //Обращаться к константам класса можно без создания объекта этого класса
    echo User::PASS;

    echo '<br>';
    $redactor = new User("Bob", "Rubinson", "Redactor");
    //$redactor->name = "Bob";
    //$redactor->showAll();
    //echo $redactor->name;

    //echo '<br>';
    $moderator = new User("George", "Washington", "Moderator");
    //$moderator->name = "George";
    //echo $moderator->name;
    //$moderator->showAll();
  ?>
</body>
</html>
