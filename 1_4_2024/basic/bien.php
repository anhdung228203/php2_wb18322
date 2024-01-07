<?php

echo '<pre>';

$bien1 = 'Ahiii';
$bien2 = 2;
$bien3 = [3, 3, 5];
$bien4 = null;
$bien5 = true;

var_dump($bien1);
var_dump($bien2);
var_dump($bien3);
var_dump($bien4);
var_dump($bien5);

// Hằng số
// LỚp đối tượng -> const 
const CONST_STATUS = 1;

// file đơn thuần, global luôn -> define
define('CONST_STATUS_1', 2);
