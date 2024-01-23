<?php

require_once './vendor/autoload.php';

use Anhdung\Bai1\Circle;
use Anhdung\Bai1\Rectangle;
use Anhdung\Bai1\Triangle;

echo '<pre>';
$circle = new Circle(5);
echo $circle->hienthi() . PHP_EOL;
echo $circle->CalculatePerimeter() . PHP_EOL;
echo $circle->CalculateArea() . PHP_EOL;

$hinhcn = new Rectangle(5,4);
echo $hinhcn -> hienthi() .PHP_EOL;
echo $hinhcn -> calculateArea() .PHP_EOL;
echo $hinhcn -> calculatePerimeter() .PHP_EOL;

$tamgiac = new Triangle(6,8,10);
echo $tamgiac -> hienthi().PHP_EOL;
echo $tamgiac -> calculateArea().PHP_EOL;
echo $tamgiac -> calculatePerimeter().PHP_EOL;