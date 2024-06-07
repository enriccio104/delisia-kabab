<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti - Kebabbaro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Contattaci</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="contact.php">Contatti</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="contact">
            <h2>Modulo di Contatto</h2>
            <form action="contact.php" method="post">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="message">Messaggio:</label>
                <textarea id="message" name="message" required></textarea>
                <br>
                <input type="submit" value="Invia">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);
                
                echo "<p>Grazie, $name. Abbiamo ricevuto il tuo messaggio: \"$message\". Ti risponderemo presto all'indirizzo $email.</p>";
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Kebabbaro. Tutti i diritti riservati.</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>
