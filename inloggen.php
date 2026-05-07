<?php
include 'functies/login.php';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">Straubs <span>Stube</span></div>
        <nav>
            <a href="index.php">Home</a>
            <a href="#">Menukaart</a>
            <a href="#">Reserveren</a>
            <a href="inloggen.php">Aanmelden</a>
        </nav>
    </header>
    <section class="hallo">
        <h1>Inloggen</h1>
        <p>Voer uw gegevens in om toegang te krijgen tot uw account</p>
    </section>
    <main>
    <form action="functies/login.php" method="post" class="login-form">
        <label for="gebruikersnaam">gebruikersnaam</label>
        <input type="text" id="gebruikersnaam" name="gebruikersnaam" required>

        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" id="wachtwoord" name="wachtwoord" required>

        <button type="submit" class="edit">Inloggen</button>
    </form>
    <a href="registeren.php">Nog geen account? Registreer je hier.</a>
    </main>
</body>
</html>