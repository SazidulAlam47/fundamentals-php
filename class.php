<?php

class Human
{
    private $age;
    public $name;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }
}
;

$sazid = new Human("Sazid", 21);
print_r($sazid);
echo $sazid->name . PHP_EOL;
echo $sazid->getAge() . PHP_EOL;