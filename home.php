<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML Example</title>
</head>
<body>
    <h2>Enter Your Name</h2>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Enter your name" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        echo "<h3>Hello, $name! Welcome to our website.</h3>";
    }
    ?>
</body>
</html>