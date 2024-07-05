<?php

trait Speak
{
    public function speaking()
    {
        echo "hello I'm speaking";

    }
}

trait Eat
{
    public function eating()
    {
        echo "hello I'm eating";
    }
}

class Human
{
    use Speak, Eat;
}

$amir = new Human();
$amir->speaking();
$amir->eating();