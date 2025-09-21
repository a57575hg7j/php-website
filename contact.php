<?php
// Contact page with a simple form
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact - My PHP Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
        $message = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name'] ?? '');
            $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
            $msg = htmlspecialchars($_POST['message'] ?? '');
            if ($name && $email && $msg) {
                // In a real app you'd send an email or store the message.
                $message = "<p>Thank you, $name! Your message has been received.</p>";
            } else {
                $message = '<p>Please fill in all fields correctly.</p>';
            }
        }
        echo $message;
        ?>
        <form method="post" action="contact.php">
            <label>Name:<br><input type="text" name="name" required></label><br>
            <label>Email:<br><input type="email" name="email" required></label><br>
            <label>Message:<br><textarea name="message" rows="5" required></textarea></label><br>
            <button type="submit">Send</button>
        </form>
    </main>
    <footer>
        <p>&copy; " . date('Y') . " My PHP Website.</p>
    </footer>
</body>
</html>
?>