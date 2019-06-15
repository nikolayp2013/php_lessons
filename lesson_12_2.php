<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    // Комментарий на одну строку
    //функции для работы с массивами
    $arr = [5, 7, 2, 89.2, 8];
    $arr_new = [6, 81, 3];

    echo count($arr) . '<br>';
    //echo $arr . '<br>';
    print_r($arr); // функция для разработчиков выводит массив или объект на экран
    echo '<br>';

    unset($arr[2]); // удаление элемента из массива
    echo in_array(2, $arr) ? "Да, есть" : "Нет такого"; // проверяет есть ли элемент в массиве
    echo '<br>';

    $arr_merge = array_merge($arr, $arr_new); // объединение 2-х массивов
    print_r($arr_merge);
    echo '<br>';

    $arr_slice = array_slice($arr_merge, 0, 3); // удаление куча элементов из массива
    print_r($arr_slice);
    echo '<br>';

    //sort($arr);
    rsort($arr); // сортировка по убыванию
    print_r($arr);
    echo '<br>';

    // сортировка ассоативных массивов
    $arr_1 = ["q" => 102, "b" => 56, "c" => 87];
    //asort($arr_1);
    //arsort($arr_1);
    ksort($arr_1); // сортировка по ключам
    print_r($arr_1);
    echo '<br>';

    shuffle($arr); // перемешивает элементы массива в случайном порядке
    print_r($arr);
    echo '<br>';
  ?>
</body>
</html>
