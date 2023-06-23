<?php 
//                                          Class Properties
//                                          ----------------


class Student{
    public $name;
    public $age;
    public $dep;
}

// create a Student class object named st1 
$st1 = new Student();

// set properties for class Student using class object
$st1->name = 'sanchitha';
$st1->age = 21;
$st1->dep = 'ict';

$st2 = new Student;

$st2->name = 'udana';
$st2->age = 20;
$st2->dep = 'iat';


// print object property
echo $st1->name;    

echo '<pre>';
print_r(get_class_vars('Student')); // get an array about #class properties
echo '</pre>';

echo '<pre>';
print_r(get_object_vars($st1)); // get an array about #relevant object properties
echo '</pre>';

// search property is available in object                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
echo property_exists($st1, 'name');  // search a property in object
// search property is available in a class
echo property_exists('Student', 'name');  // search a property in class



//                                     Special Notice
// ****************************************************************************************


// in functions php we can not create same name function using different case sensitive
// but we can call different case sensitive ways

function greetings(){
    echo " <br> Hello World! , this is greeting function";
}

GreeTingS();
greeTINGs();



// ****************************************************************************************


