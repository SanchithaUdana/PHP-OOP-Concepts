<?php 

class Employee {
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        echo "Employee {$this->name} is created.. ";
    }

}

?>