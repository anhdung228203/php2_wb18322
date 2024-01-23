<?php

namespace Anhdung\Bai1;
use Anhdung\Bai1\Interface\ShapeInterface;

class Triangle extends ShapeAbstract implements ShapeInterface
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function hienthi()
    {
        echo "Hình tam giác có: "   . PHP_EOL;
        echo "Cạnh a = " . $this->a . PHP_EOL;
        echo "Cạnh b = " . $this->b . PHP_EOL;
        echo "Cạnh c = " . $this->c;
    }

    public function calculateArea()
    {
        $s = ($this->a + $this->b + $this->c) / 2;
        echo "Diện tích tam giác là: "
        . sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
    }

    public function calculatePerimeter()
    {
        echo "Chu vi tam giác là: " . $this->a + $this->b + $this->c;
    }
}