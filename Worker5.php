<?php
/**
 * Created by PhpStorm.
 * User: MY
 * Date: 16.11.2017
 * Time: 20:06
 */

class Worker5 extends User5
{
    private $salary;

    public function setSalary ($salary){
        $this->salary = $salary;
    }
    public function getSalary () {
        return $this->salary;
    }
}