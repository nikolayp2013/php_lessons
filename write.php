<?php
  if($_POST['message'] != "") {
    $mess = $_POST['message'] . "\n";
    $file = fopen('text/data.txt', 'a');
    fwrite($file, $mess);
    fclose($file);
  }
  header('Location: /lesson_10.php');
  exit(); // die();
?>
