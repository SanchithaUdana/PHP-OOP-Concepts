<?php 
// parent class
class product{
    var $product_name;
    var $cost_prize;
    var $sale_prize;

    function calculate_sale_prize(){
        $this->sale_prize = round(($this->cost_prize * 1.2),2);
    }
}

// sub class
class computer extends product{
    var $processer;
    var $chipset;

}

//sub class
class garment extends product{
    var $clothNo;
    var $clothId;
    
}

$computer1 = new computer;

$computer1->product_name = "macbook pro";
$computer1->cost_prize = 399000;
$computer1->chipset = "M1";
$computer1->processer = "M1";

$computer1->calculate_sale_prize();

echo "<pre>";
print_r(get_object_vars($computer1));
echo "</pre>";

$sportKit = new garment;

$sportKit->clothNo = 01;

echo "<pre>";
print_r(get_class_vars("garment"));
echo "<pre>";

echo "<pre>";
print_r(get_object_vars($sportKit));
echo "<pre>";

// get object parent class
echo get_parent_class($sportKit);
echo "<br>";

// get is object is a sub class  
// ( is subclass out 1 , is not subclass out 0 )
echo is_subclass_of($computer1 , "product");
echo "<br>";


$parentClasses = class_parents($sportKit);

echo "<pre>";
print_r($parentClasses);
echo "</pre>";




















?>
