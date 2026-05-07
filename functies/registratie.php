<?php   
include './connecties database/conn.php';

$sql = "SELECT 1 FROM Account WHERE gebruikersnaam = :gebruikersnaam";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($result){
    echo "Deze gebruikersnaam is al in gebruik.";
} else {
    echo "Deze gebruikersnaam is beschikbaar.";
}