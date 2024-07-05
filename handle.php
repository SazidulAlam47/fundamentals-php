<?php

if (!empty($_POST['name'])) {
    echo "Hello " . $_POST['name'];
} else {
    echo "provide a name";
}