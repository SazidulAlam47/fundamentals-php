<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP in HTML</title>
</head>

<body>

    <?php
    $names = ["John", "Jane", "Joe", "Jill", "Jack"];
    ?>

    <h1>Names</h1>
    <ul>
        <?php
        foreach ($names as $name) {
            echo "<li>" . $name . "</li>";
        }
        ?>
    </ul>

</body>

</html>