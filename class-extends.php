<?php

class Car
{
    public function drive()
    {
        echo "Car is driving" . PHP_EOL;
    }
}

class ElectricCar extends Car
{
    protected function epcu()
    {
        echo "I am a Electric Power Control" . PHP_EOL;
    }
}

class Tesla extends ElectricCar
{
    public function autoDrive()
    {
        echo "Tesla can auto drive" . PHP_EOL;
        $this->epcu();
    }
}


$tesla = new Tesla();
$tesla->drive();
$tesla->autoDrive();