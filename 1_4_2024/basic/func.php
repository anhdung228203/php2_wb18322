<?php
echo "<pre>";

// Hàm có trả về và không có trả về
function sum($a, $b)
{
    return $a + $b;
}
$sum = sum(2, 3);
echo 'Hàm có trả về:' . $sum . PHP_EOL;

function sum2($a, $b)
{
    echo $a + $b;
}
echo 'Hàm không trả về:';
sum2(5, 4) . PHP_EOL;

// Hàm có tham số và không có tham số
function hello($msg)
{
    return $msg;
}

function hello1(){
    return 'Hello' . PHP_EOL;
}

echo hello('Hello world!');
hello1();

// Hàm có tham số : có giá trị mặc định và không có
function hi($name, $msg= 'Hi'){
    return $msg.':'. $name;
}

echo hi("Nga"). PHP_EOL;
echo hi("Nga", 'Hello'). PHP_EOL;

//=========================Closure & Arrow ===================

$closure = function (){
    echo 'Hello Closure'. PHP_EOL;
};
$closure();

$y =5;
array_map(function ($item) use ($y){
    echo $item * $y . PHP_EOL;
}, [1,2,3]);

$fn = fn($x) => $y * $x;
echo $fn(5) . PHP_EOL;

$arr = [1,2,3];
$arr2 = array_map(fn($item) => $item * $y . PHP_EOL, $arr);
print_r($arr2);