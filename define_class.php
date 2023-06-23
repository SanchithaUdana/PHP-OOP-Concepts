<?php
//                                          Define a Class
//                                          -------------

// this is class structure in php
class Student
{
}

// get all of declared classes in php
$classes = get_declared_classes();

echo "<pre>";
print_r($classes);
echo "</pre>";

// check the class is available in declared class list
$className = "Student";

if (class_exists($className)) {
    echo $className . " class is Available";
} else {
    echo $className . " class is not Available";
}

