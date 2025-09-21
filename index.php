<?php
// Simple PHP website example
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to My PHP Website</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Home</h2>
        <p>This is a simple PHP website demonstrating basic routing and layout.</p>
        <?php
        // Example of dynamic content
        $hour = date('G');
        if ($hour < 12) {
            echo "<p>Good morning! The current time is " . date('H:i') . ".</p>";
        } elseif ($hour < 18) {
            echo "<p>Good afternoon! The current time is " . date('H:i') . ".</p>";
        } else {
            echo "<p>Good evening! The current time is " . date('H:i') . ".</p>";
        }
        ?>
    </main>
    <footer>
        <p>&copy; " . date('Y') . " My PHP Website. All rights reserved.</p>
    </footer>
</body>
</html>
?>