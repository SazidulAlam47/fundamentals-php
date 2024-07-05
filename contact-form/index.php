<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Search</title>
</head>

<body>
    <h2>Contact Form</h2>
    <form method="POST" action="handle.php">
        <input type="text" name="name" placeholder="Your Name"> <br /> <br />
        <input type="email" name="email" placeholder="Your Email"> <br /> <br />
        <textarea name="message" placeholder="Your Message"></textarea> <br /> <br />
        <input type="submit">
    </form>
    <?php
    if (!empty($_GET['submitted'])) {
        if ($_GET['submitted'] === 'true') {
            echo "<p style='color: green;'>Thank you for contacting us. We will get back to you shortly.</p>";
        } else {
            echo "<p style='color: red;'>Provide all information</p>";
        }
    }
    ?>
</body>

</html>