<?php 

// load the spl_autoload_register() function to import external class file

function my_autoload($classname){
    require_once('classes/' . $classname . '.class.php');
}
spl_autoload_register("my_autoload");


$emp1 = new Employee("sanchitha");


?>