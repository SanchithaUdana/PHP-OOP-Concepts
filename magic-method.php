<?php 

//                                              Magic Method
//                                              ------------

// there are have many magic methods in php

    // __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), 
    //__isset(), __unset(), __sleep(), __wakeup(), __serialize(), __unserialize(), 
    //__toString(), __invoke(), __set_state(), __clone(), and __debugInfo().


// we discuss __construct magic method


class Employee {
    
    public $fname;
    public $lname;
    public $dep;
    public $salary;

    public function __construct($values)
    {
        // we used isset() method to check the value is set to the array 
        $this->fname = isset($values['fname']) ? $values["fname"] : NULL;
        $this->lname = isset($values['lname']) ? $values['lname'] : NULL;
        $this->dep = isset($values['dep']) ? $values['dep'] : NULL;
        $this->salary = isset($values['salary']) ? $values['salary'] : NULL;
    }

}
// parametrs pass using associative array

$myarray = ['fname' => 'sanchitha',"lname" => 'udana','dep' => 'ict','salary' => 150000];

$emp1 = new Employee($myarray);



echo "<pre>";
print_r(get_object_vars($emp1));
echo "</pre>";





?>