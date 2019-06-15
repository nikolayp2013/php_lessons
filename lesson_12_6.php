<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // глобальный массив server
    echo $_SERVER['REQUEST_URI'] . '<br>';
    echo $_SERVER['PHP_SELF'] . '<br>';
    //echo $_SERVER['SERVER_ADDR'] . '<br>';
    phpinfo();
  ?>
</body>
</html>
