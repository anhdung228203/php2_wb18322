<?php 

class product{

    public function __construct(
        public string $id,
        public string $name,
        public string $price,
        public DateTime $ngaytao,
        public string|null $image = null,
        public string|null $description = null,
    
        ){
            echo __FUNCTION__ . PHP_EOL;
        }
    // public string $id;
    // public string $name;
    // public string $price;
    // public DateTime $ngaytao; 

    // public string $image;
    // public string $description;
   
    public function add(){
        echo "Thêm sản phẩm thành công";
    }

    public function delete(){

    }
    
}

echo "<pre>";

$sanpham = new product('1','Bia',500000,new DateTime('now'),'123','123');
$sanpham2 = new product('2','Rượu',100000,new DateTime('now'));

// $sanpham -> id = '123';
// $sanpham -> name = 'Bim Bim';
// $sanpham -> price = 500000;
// $sanpham -> ngaytao = new DateTime('now');

print_r($sanpham);
print_r($sanpham2);

$sanpham ->add();