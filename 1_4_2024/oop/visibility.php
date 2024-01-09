<?php

class Visibility{
    public $publicVar;
    protected $protectedVar ;
    private $privateVar ;

    public function setProtectedVar( $protectedVar ){
        $this->protectedVar = $protectedVar;
    }

    public function getProtectedVar(){
        return $this->protectedVar;
    }

    public function setPrivateVar( $privateVar ){
        $this->privateVar = $privateVar;
    }

    public function getPrivateVar(){
        return $this->privateVar;
    }
 
}

class VisibilityChild extends Visibility{
    public function HienThiGiaTriBienPropertyVar(){
        return $this-> protectedVar;
    }
}
echo '<pre>';

$obj1 = new Visibility();
$obj1 ->setProtectedVar('kkk');
$obj1 ->setPrivateVar('ddd');
$obj1->publicVar = 'XXX';

// print_r($obj1);
echo $obj1 -> getPrivateVar() . PHP_EOL;
echo $obj1 ->getProtectedVar() . PHP_EOL;