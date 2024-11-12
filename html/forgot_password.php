<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapomniałem hasła</title>
    <link rel="stylesheet" href="form.css"> <!-- Link do pliku CSS -->
</head>
<body>

<div class="form-container">
    <h2>Zapomniałem hasła</h2>
    <form action="forgot_password.php" method="post">
        <label for="email">Wprowadź swój adres e-mail:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Wyślij link do resetowania hasła</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];

        // Tutaj możesz dodać logikę do wysyłania e-maila z linkiem do resetowania hasła

        echo "<p>Link do resetowania hasła został wysłany na adres: $email</p>";
    }
    ?>
</div>

</body>
</html>