<?php
/**
 * Created by PhpStorm.
 * User: MY
 * Date: 16.11.2017
 * Time: 20:23
 */

class Student extends User5
{
    private $sch;
    private $curs;
// методы делаю паблик, чтоб можно было проверить что записывают / выводят
    public function getSch() {
        return $this->sch;
    }
    public function getCurs() {
        return $this->curs;
    }

    public function setSch($sch) {
        $this->sch = $sch;
    }
    public function setCurs($curs) {
        $this->curs = $curs;
    }
}