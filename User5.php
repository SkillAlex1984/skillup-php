<?php
/**
 * Created by PhpStorm.
 * User: MY
 * Date: 16.11.2017
 * Time: 20:04
 */

class User5
{
    protected $name;
    protected $age;

    public function getName() {
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age) {
         $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }
}