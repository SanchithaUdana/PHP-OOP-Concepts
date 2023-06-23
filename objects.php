<?php
//                                                 Create an Object
//                                                 ----------------

class Student
{

}

// create an object using Student class
$sanchitha = new Student;

echo get_class($sanchitha);
echo '<br>';
echo is_a($sanchitha, "Student");


// example for class and object (with constructor)

class Teacher{
    public $name;
    public $age;
    // constructor of the teacher class
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    // user defined method

    public function message(){
        echo "<h2> My class teacher is $this->name. </h2>";
    }

}

// create a object
$teacher1 = new Teacher("aaaa",30);
// call to the message method using object
$teacher1->message();

