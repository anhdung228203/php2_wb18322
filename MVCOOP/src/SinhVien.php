<?php
namespace Dungtaph43570\Mvcoop;

use Dungtaph43570\Mvcoop\Interface\HumanInterface;

class SinhVien implements HumanInterface{
    public function __construct(
        protected string $name,
        protected string $code
    ){

    }

    public function showName(){
        echo $this->name . PHP_EOL;
    }
}