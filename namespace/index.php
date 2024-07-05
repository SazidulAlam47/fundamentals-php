<?php

require_once ("classA.php");
require_once ("classB.php");


$movie = new Movie\Order();
$movie->handle();

$book = new Book\Order();
$book->handle();