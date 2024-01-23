<?php
namespace Anhdung\Bai1;

use Anhdung\Bai1\Interface\ShapeInterface;

class Rectangle extends ShapeAbstract implements ShapeInterface{
    private $dai;
    private $rong;

    public function __construct($dai, $rong)
    {
        $this->dai = $dai;
        $this->rong = $rong;
    }

    public function calculateArea()
    {
        echo "Diện tích là:" . $this->dai * $this->rong;
    }

    public function calculatePerimeter(){
        echo "Chu vi là:" . 2*($this->dai + $this->rong);
    }

    public function hienthi(){
        echo "Hình chữ nhật có: " . PHP_EOL;
        echo "Chiều dài là: " . $this -> dai . PHP_EOL;
        echo "Chiều rộng là: ".$this ->rong;
    }
}
