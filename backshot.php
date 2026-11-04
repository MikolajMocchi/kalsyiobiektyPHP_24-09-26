<?php
class Enployee {
    protected $password;
    private $salary;


    public function __construct($password, $salary) {
        $this->password = $password;
        $this->salary = $salary;
    }

}

$employee = new Employee("haslo","100");
echo $employee->getSalary()