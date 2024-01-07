<?php

echo '<pre>';
session_start();

$item = [
    'id' => 10,
    'name' =>  'Nguyễn Văn A',
    'quantity' => 2,
    'price' => 2000
];

$_SESSION['cart']['id'] = $item;
print_r($_SESSION);

unset($_SESSION['cart']['id']);
print_r($_SESSION);

session_destroy();
$_SESSION = [];
print_r($_SESSION);

