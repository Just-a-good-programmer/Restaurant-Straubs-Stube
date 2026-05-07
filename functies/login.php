<?php   
include './connecties database/conn.php';



    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];

    $sql = "SELECT 1 FROM Account WHERE gebruikersnaam = :gebruikersnaam";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':gebruikersnaam', $gebruikersnaam);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result && password_verify($wachtwoord, $result['wachtwoord'])) {
        echo "Inloggen succesvol!";
        // Hier kun je de sessie starten of doorsturen naar een andere pagina
    } else {
        echo "Ongeldige gebruikersnaam of wachtwoord.";
    }
