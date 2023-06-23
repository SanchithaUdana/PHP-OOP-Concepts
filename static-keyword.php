<?php 

// static kryword
    // it's used to variable and methods

class Employee {
    public static $count = 0;

    public static function add(){
        self::$count++;
    }
}


Employee::$count = 5;

echo Employee::$count;
Employee::add();
echo "<br>";
echo Employee::$count;

?>