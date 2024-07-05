<?php

session_start();


$_SESSION['testSession'] = 'Hello World';


echo $_SESSION['testSession'];


session_destroy(); // delete all

unset($_SESSION['testSession']); // delete one