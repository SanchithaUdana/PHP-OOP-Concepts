<?php 

//                                      Late-Static-Binding
//                                      -------------------


class Product {
    public static $product_category = "genaral";

    public static function show_category() {
        // we use static keyword to call static variable instead self keyword 
        // it can access individualy static variables in sub classes
        echo "Product category : " . static::$product_category . "<br>";
    }
}


class Computer extends Product {
    public static $product_category = "computers";
}


// static variable and methods calling outside of the class
Product::show_category();
Computer::show_category();







?>