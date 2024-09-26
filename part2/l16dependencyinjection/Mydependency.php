<?php

// => Child to Parent  

class Phone{
    public $brand; 

    public function __construct($val){
        $this->brand =$val;
    }

    public function getbrand(){
        return "Phone brand is = ".$this->brand . "<br/>";
    }
}

class Phonemodel extends Phone{
    public $price;

    public function __construct($val,Phone $phone){
        $this->price = $val;
        $this->brand = $phone->getbrand();
    }

    public function getprice(){
        echo "Price is = ".$this->price . "<br/>";
    }
}

$phoneobj = new Phone("iPhone");
echo $phoneobj->getbrand(); // Phone brand is = iPhone

$phonemodelobj = new Phonemodel(500,$phoneobj);
$phonemodelobj->getprice(); // Price is = 500

// passing by properties 
echo $phonemodelobj -> getbrand(); // Phone brand is = Phone brand is = iPhone

// echo $phonemodelobj->brand; // Phone brand is = Phone brand is = iPhone

?>