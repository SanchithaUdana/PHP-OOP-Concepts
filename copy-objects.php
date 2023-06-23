<?php

//                                      object copy using "clone" keyword
//                                      ---------------------------------

// create a object and create another object using copy of first object.
// but normaly we create "$object2 = $object1" it's meaning is object2 is refference of onject1
// so in this method we can not change values in object properties individualy

// in this fault we fixed using "clone" keyword
    //we create copy object like this
    // $object2 = clone $object1;


$x = 10;
$y = $x;

echo "x value is {$x} y value is {$y} <br>";
$y = 20;
// after changeing value
echo "x value is {$x} y value is {$y} <br>";

echo "<hr>";


class Employee {
    public $description;
    public $salary;

    public function __construct($des, $salary)
    {
        $this->description = $des;
        $this->salary = $salary;    
    }
}


$emp1 = new Employee("ict",150000);
$emp2 = clone $emp1;  // we used clone keyword 

echo "description : {$emp1->description} salary is : {$emp1->salary} <br>";
echo "description : {$emp2->description} salary is : {$emp2->salary} <br>";
echo "<hr>";

$emp2->description = "ICT SOftware";
$emp2->salary = 2000000;

echo "description : {$emp1->description} salary is : {$emp1->salary} <br>";
echo "description : {$emp2->description} salary is : {$emp2->salary} <br>";
echo "<hr>";




?>