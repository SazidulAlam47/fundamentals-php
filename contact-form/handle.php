<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (empty($name) || empty($email) || empty($message)) {

    header("Location: index.php?submitted=false");
    exit();

} else {

    $file = fopen("contact.json", "r");

    $jsonText = '';

    while ($line = fgets($file)) {
        $jsonText .= $line;
    }
    fclose($file);

    $contacts = [];

    if ($jsonText) {
        $contacts = json_decode($jsonText, true);
    }

    $contacts[] = [
        "name" => $name,
        "email" => $email,
        "message" => $message,
        "time" => date('d-m-Y H:i:s'),
    ];

    $json = json_encode($contacts);

    $file = fopen("contact.json", "w");

    fwrite($file, $json);

    fclose($file);

    header("Location: index.php?submitted=true");
}

