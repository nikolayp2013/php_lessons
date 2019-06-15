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
      public $name;
      private $surname = "None";
      private $email;
      private $login;
      private $pass;
    }

    $admin = new User();
    $admin->name = "John";
    echo $admin->name;

    echo '<br>';
    $redactor = new User();
    $redactor->name = "Bob";
    echo $redactor->name;

    echo '<br>';
    $moderator = new User();
    $moderator->name = "George";
    echo $moderator->name;
  ?>
</body>
</html>
