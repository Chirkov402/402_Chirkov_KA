<?php

namespace App\Test;

use App\Vector;

function runTest()
{
    $v1 = new Vector(5, 6, 7);
    echo "v1 = " . $v1 . "\n"; // (5, 6, 7)

    $v2 = new Vector(8, 9, -9);
    echo "v2 = " . $v2 . "\n"; // (8, 9, -9)

    $vectorAddition = $v1->add($v2);
    $vectorDifference = $v1->sub($v2);
    $vectorNumberProduct = $v1->multiply(2);
    $scalarProduct = $v1->scalar($v2);
    $vectorProduct = $v1->vector($v2);

    echo "Сумма векторов\n";
    echo $vectorAddition; // (13; 15; -2)
    echo "\nРазность векторов\n";
    echo $vectorDifference; // (-3; -3; 16)
    echo "\nПроизведение вектора на число\n";
    echo $vectorNumberProduct; // (10; 12; 14)
    echo "\nСкалярное произведение векторов\n";
    echo $scalarProduct; // 31
    echo "\nВекторное произведение\n";
    echo $vectorProduct; // (117;-101;3)
}
