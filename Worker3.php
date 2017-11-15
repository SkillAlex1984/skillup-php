<?php
/**
 * Created by PhpStorm.
 * User: MY
 * Date: 15.11.2017
 * Time: 22:06
 */

class Worker3
{
    private $name;
    private $salary;


    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
    public function getName() {
        return $this->name;
    }
    public function getSalary () {
        return $this->salary;
    }
}