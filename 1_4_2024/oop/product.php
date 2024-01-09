<?php 

class product{
    public string $id;
    public string $name;
    public string $price;
    public string $image;
    public string $description;
   
    public function add(){
        echo "Thêm sản phẩm thành công";
    }

    public function delete(){

    }
    public function __construct(){
        echo __FUNCTION__ . PHP_EOL;
    }
}

echo "<pre>";

$sanpham = new product();

$sanpham -> id = '123';
$sanpham -> name = 'Bim Bim';
$sanpham -> price = 500000;

print_r($sanpham);

$sanpham ->add();