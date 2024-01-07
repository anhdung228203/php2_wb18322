<?php

echo '<pre>';

$array1 = [10, 5, 15,30];

$array2 = [
    'name' => 'Nguyễn Văn A',
    'age' => 25
];

$array3 = [
    ['name' => 'Nguyễn Văn A', 'age' => 35],
    ['name' => 'Nguyễn Văn B', 'age' => 28],
    ['name' => 'Nguyễn Văn C', 'age' => 96],
];

$array4 = [
    ['name' => 'Nguyễn Văn A', 'age' => 35],
    ['name' => 'Nguyễn Văn B', 'age' => 28],
    [
        'name' => 'Nguyễn Văn C',
        'age' => 96,
        'points' => [
            'web2' => 10,
            'PHP' => 9
        ]
    ]
];   

$a =[1, 5, 'xyz' => '123'];
$b =[1, 5, 'xyz' => 'jqk'];
$c =[1, 5, [12345, 5678]];

// array_merge dùng gộp 1 hoặc nhiều mảng <sẽ bị ghi đè khi có phần tử trùng>
$arrayMerged = array_merge($a, $b, $c);
print_r($arrayMerged);
$arrayMerged2 = [...$a, ...$b, ...$c];
print_r($arrayMerged2);

// Hàm array_push thêm 1 hoặc nhiều phần tử vào cuối mảng
$a = [1, 5, 'xyz'];
array_push($a, 'xyz', [123, '123'=> '456']);
print_r($a);

// Hàm in_array kiểm tra xem 1 gí trị cso tồn tại trong 1 mảng không
if(in_array(1,$a)){
    echo 'ok' . PHP_EOL;
}else{
    echo '!ok' . PHP_EOL;
}

// Hàm explode() tách 1 chuỗi thành 1 mảng theo 1 kí tự
$str = 'Long mềm! ok';
$array = explode(" ", $str);
print_r($array);

// Hàm implode() Gộp mảng thành chuỗi theo 1 kí tự 
$str = implode(",", $array);
echo $str;

// Hàm unset() xóa biến or phần tử mảng
$b =[1, 5, 'xyz' => 'jqk'];
unset($b['xyz']);
print_r($b);






