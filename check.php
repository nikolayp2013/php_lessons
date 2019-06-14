<?php
  header('Location: /lesson_9.php');
  exit(); // die();

  if($_GET['name'] == "")
    echo 'Введите ваше имя<br>';
  else
    echo $_GET['name'] . '<br>';
  if($_GET['email'] == "")
    echo 'Введите ваш email<br>';
  else
    echo $_GET['email'];
?>
