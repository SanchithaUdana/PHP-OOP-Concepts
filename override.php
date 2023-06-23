<?php 

// parent class
class product{
    var $product_name;
    var $cost_prize;
    var $sale_prize;

    function display(){
        echo "Product Name : " . "<b>" .  $this->product_name .  "</b> <br>";
        echo "Sale Prize : " . "<b>" .  $this->cost_prize .  "</b> <br>";
        echo "Sale Prize : " . "<b>" .  $this->sale_prize .  "</b> <br>";
        echo "<br>";
    }

}

// sub class
class computer extends product{
    var $proccesor;
    var $hard_disk;
    var $ram;

    // override the parent class function
    function display(){
        echo "Product Name : " . "<b>" .  $this->product_name .  "</b> <br>";
        echo "Cost Prize : " . "<b>" .  $this->cost_prize .  "</b> <br>";
        echo "Sale Prize : " . "<b>" .  $this->sale_prize .  "</b> <br>";
        echo "Processor : " . "<b>" .  $this->proccesor .  "</b> <br>";
        echo "Hard Disk : " . "<b>" .  $this->hard_disk .  "</b> <br>";
        echo "Ram : " . "<b>" .  $this->ram .  "</b> <br>";
        echo "<br>";
    }

}




$product1 = new product;

$product1->product_name = "table name";
$product1->cost_prize = 10000;
$product1->sale_prize = 15000;

$product1->display();



$computer1 = new computer;

$computer1->product_name = "macbook pro M1";
$computer1->cost_prize = 399000;
$computer1->sale_prize = 450000;
$computer1->hard_disk = "256GB";
$computer1->proccesor = "M1";
$computer1->ram = "8GB";

$computer1->display();




















?>
