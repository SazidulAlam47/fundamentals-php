<?php

class Human
{
    private $name;
    private $age;

    public function setName($name)
    {
        $this->name = ucfirst($name);
        return $this;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function introduce()
    {
        return "My name is {$this->name} and I am {$this->age} years old";
    }
}

$sazid = new Human();
echo $sazid->setName('sazid')->setAge(21)->introduce();
