<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <form action="/write.php" method="post">
    <textarea name="message" rows="8" cols="80"></textarea><br>
    <button type="submit">Отправить</button>
  </form>
  <?php
    // Комментарий на одну строку
    /*$file = fopen('text/data.txt', 'r');
    echo fread($file, 10);
    fclose($file);*/
    echo file_get_contents('text/data.txt') . '<br>'; //считать информацию
    //file_put_contents('text/data.txt', 'Testing'); поместить информацию в файл
    echo file_exists('text/data.txt') . '<br>';
    echo filesize('text/data.txt') . '<br>';

    //rename('text/data.txt', 'text/new_data.txt');
    //unlink('text/data.txt'); удаляет файл с сервера
  ?>
</body>
</html>
