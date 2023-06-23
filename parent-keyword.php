<?php 

class Employee {
    public function calculate() {
        echo "this is parent calculate method <br>";
    }
}

class fullTimeEmployee extends Employee {

    // override the parent method
    public function calculate()
    {
        echo "new addings to sub class <br>";
        parent::calculate();
    }

}

$emp1 = new fullTimeEmployee;

$emp1->calculate();





?>