<?php

class Employee {

    // private property
    private $basic_salery = 50000;

    // getter method
    public function get_basic_salary() {
        return $this->basic_salery;
    }

    // setter method
    public function set_basic_salery($new_salary) {
        $this->basic_salery = $new_salary;
    }

}


$fullTimeEmployee = new Employee;

echo "Before update : " . $fullTimeEmployee->get_basic_salary() . "<br>";

$fullTimeEmployee->set_basic_salery(150000);

echo "After update : " . $fullTimeEmployee->get_basic_salary() . "<br>";






?>