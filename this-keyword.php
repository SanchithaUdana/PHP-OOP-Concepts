<?php 

class Employee{
        var $first_name;
        var $last_name;

        function fullName(){
            echo $this->first_name . " " . $this->last_name;
        }
}


$emp1 = new Employee;

$emp1->first_name = "sanchitha";
$emp1->last_name = "udana";

$emp1->fullName();

