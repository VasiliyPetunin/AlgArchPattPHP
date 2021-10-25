<?php

include 'randArray.php';
include 'LinearSearch.php';
include 'BinarySearch.php';
include 'InterpolationSearch.php';

const NUM = 500;

$arr = getSortRandArray();

function findIndex ($searchMethod, $array)
{
    if ($searchMethod === "linearSearch") {
        echo "Линейный поиск: ". "<br>";
    }

    if ($searchMethod === "binarySearch") {
        echo "Бинарный поиск: ". "<br>";
    }

    if ($searchMethod === "interpolationSearch") {
        echo "Интерполяционный: ". "<br>";
    }

    $index =  $searchMethod($array, NUM);

    return $index;
}

print_r($arr);
echo "<br><br>";

// linearSearch/binarySearch/interpolationSearch
$index = findIndex("linearSearch", $arr);

if (is_numeric($index)) {
    unset($arr[$index]);
    echo "НАЙДЕННОЕ ЧИСЛО ПОД ИНДЕКСОМ ".$index." УДАЛЕНО!"."<br><br>";
} else {
    echo "ЧИСЛО НЕ НАЙДЕНО<br><br>";
}

print_r($arr);
echo "<br><br>";
