<?php

include ("Shape.php");

$shape = new Shape();
$shape->setName("Обычная фигура");
$shape->setColor("Красный");

$triangle = clone $shape;
$triangle->setName("Треугольник");
$triangle->setColor("Синий");

$square = clone $shape;
$square->setName("Квадрат");
$square->setColor("Оранжевый");

echo"<pre>";
var_dump($shape);

var_dump($triangle);

var_dump($square);
echo"</pre>";