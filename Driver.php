<?php
/**
 * Created by PhpStorm.
 * User: MY
 * Date: 16.11.2017
 * Time: 20:40
 */

class Driver extends Worker5
{
    private $driverTime;
    private $category;

    public function getDriverTime()
    {
        return $this->driverTime;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function setDriverTime($driverTime)
    {
        $this->driverTime = $driverTime;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }
}