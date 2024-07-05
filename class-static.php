<?php

class Human
{
    private static $name = "Sazid";

    public static function sayHello()
    {
        echo 'Hello world. My name is ' . self::$name;
    }
}

Human::sayHello();