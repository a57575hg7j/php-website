<?php
// About page
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About - My PHP Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>About Us</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Our Story</h2>
        <p>This site is a demonstration of a simple PHP website structure.</p>
    </main>
    <footer>
        <p>&copy; " . date('Y') . " My PHP Website.</p>
    </footer>
</body>
</html>
?>