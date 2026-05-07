<?php 
include 'functies/registratie.php';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">Straubs <span>Stube</span></div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Menukaart</a>
            <a href="#">Reserveren</a>
            <a href="inloggen.php">Aanmelden</a>
        </nav>
    </header>
<header>
        <div class="logo">Straubs <span>Stube</span></div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Menukaart</a>
            <a href="#">Reserveren</a>
            <a href="inloggen.php">Aanmelden</a>
        </nav>
    </header>
    <section class="hallo">
        <h1>Registreren</h1>
        <p>Maak een account aan om te bestellen en reserveren</p>
    </section>
    <main>
        <form action="functies/registratie.php" method="post" class="login-form">
            <label for="naam">Naam:</label>
            <input type="text" id="naam" name="naam" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="wachtwoord">Wachtwoord:</label>
            <input type="password" id="wachtwoord" name="wachtwoord" required>

            <button type="submit">Registreren</button>
        </form>
    </main>
</body>
</html>