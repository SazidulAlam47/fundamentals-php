<?php

class Person
{

    public function __construct(public string $name, public int $age)
    {
    }

    public function introduce()
    {
        echo "Hello, my name is {$this->name} and I am {$this->age} years old.";
    }
}

$person = new Person("John", 30);
$person->introduce();