<?php


//                                          Access Modifires
//                                          ----------------


// access modifires are can use control the accessitibility of variables and methods

// Three types of access modifires
    // 01 -  public
    // 02 -  projected
    // 03 -  private

// public 
    // can access any where in the program

// protected
    // can access own class and sub classes of the parent class (inherited class)

// private
    // can only access own class


class Product{
    public $name = "sanchitha";
    protected $age = 21;
    private $id = 2002;

    public function accessDisplay(){
        echo $this->name . "<br>";
        echo $this->age . "<br>";
        echo $this->id . "<br>";
    }
}

class computer extends Product{
    public function callProtectedInfo(){
        echo "protected variable of Product Class : " . $this->age;
    }
}

$product1 = new Product;
$product1->accessDisplay();

$macbook = new computer;
$macbook->callProtectedInfo();






?>