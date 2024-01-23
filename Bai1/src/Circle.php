<?php

namespace Anhdung\Bai1;

use Anhdung\Bai1\Interface\ShapeInterface;

class Circle extends ShapeAbstract implements ShapeInterface
{
    private $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function calculateArea()
    {
        echo "Diện tích là:" . pi() * pow(2, $this->r);
    }

    public function calculatePerimeter()
    {
        echo "Chu vi là:" . 2 * pi() * $this->r;
    }

    public function hienthi()
    {
        echo "Hình tròn có: " . PHP_EOL;
        echo "Bán kính là: " . $this->r;
    }
}
