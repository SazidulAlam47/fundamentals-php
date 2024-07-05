<?php

// $expire = time() + (60 * 60);
// setcookie("test", "this-is-test-cookie", $expire, '/');

if (isset($_COOKIE['test'])) {
    echo $_COOKIE['test'];
} else {
    echo "Cookie not found";
}