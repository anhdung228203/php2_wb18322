<?php

require_once './vendor/autoload.php';

use Dungtaph43570\Mvcoop\SinhVien;

$sinhVien = new SinhVien('Hello', "Ph43570");

echo '<pre>';

// print_r($sinhVien);

$sinhVien -> showName();