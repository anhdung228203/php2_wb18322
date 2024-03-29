<?php

echo "<pre>";

$array1 = [10, 5, 15, 30];
echo $array1[2] . PHP_EOL;

$array2 = [
    'name' => 'Nguyễn Văn A',
    'age' => 25
];
echo $array2['name'] . PHP_EOL;

$array3 = [
    ['name' => 'Nguyễn Văn A', 'age' => 35],
    ['name' => 'Nguyễn Văn B', 'age' => 28],
    ['name' => 'Nguyễn Văn C', 'age' => 96],
];
echo $array3[2]['age'] . PHP_EOL;

$array4 = [
    ['name' => 'Nguyễn Văn A', 'age' => 35],
    ['name' => 'Nguyễn Văn B', 'age' => 28],
    [
        'name' => 'Nguyễn Văn C',
        'age' => 96,
        'points' => [
            'Web2' => 10,
            'PHP2' => 9
        ]
    ],
];
echo $array4[2]['points']['PHP2'] . PHP_EOL;

// Hàm array_merge — Gộp một hoặc nhiều mảng
$a = [1, 5, 'xyz' => 'QKA'];
$b = [10, 50, 'xyz' => 'JQK'];
$c = [100, 500, [34567, 56789]];

$arrayMerged = array_merge($a, $b, $c);
print_r($arrayMerged);
$arrayMerged2 = [...$a, ...$b, ...$c];
print_r($arrayMerged2);

// Hàm array_push — Thêm một hoặc nhiều phần tử vào cuối mảng
$a = [1, 5, 'xyz' => 'QKA'];

array_push($a, 'xyz', '1133', [111, 'kiki' => 'ahihi']);
print_r($a);

// Hàm in_array — Kiểm tra xem một giá trị có tồn tại trong một mảng không
if (in_array([111, 'kiki' => 'ahihi'], $a)) {
    echo 'OK' . PHP_EOL;
} else {
    echo '!OK' . PHP_EOL;
}

// Hàm explode() —  Tách một chuỗi thành 1 mảng theo 1 ký tự
$str = 'Thắm Ngộ Nghĩnh! OK';

$array = explode(' ', $str);
echo $str . PHP_EOL;
print_r($array);

// Hàm implode() — Gộp 1 mảng thành chuỗi theo 1 ký tự
$str = implode(', ', $array);
echo $str . PHP_EOL;

// Hàm unset() — Xóa biến or phần tử mảng
$a = [1, 5, 'xyz' => 'QKA'];
unset($a['xyz']);
print_r($a);
