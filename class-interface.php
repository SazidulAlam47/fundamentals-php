<?php

interface Human
{
    public function sayName();
    public function getAge(int $yearBorn);
}

class Person implements Human
{

    public function sayName()
    {
        echo "my name is Sazid\n";
    }
    public function getAge(int $yearBorn)
    {
        echo 'my age is ' . (date('Y') - $yearBorn) . ' years old';
    }
}

$person = new Person();
$person->sayName();
$person->getAge(1999);