<?php 

echo phpversion();
echo "<br>";

class Employee {
    // this is a constant
    const EEP_RATE = 0.08;

    public function calculate(){
        echo self::EEP_RATE * 2;
    }
}

echo Employee::EEP_RATE;

echo "<br>";
$ep1 = new Employee;
$ep1->calculate();



?>