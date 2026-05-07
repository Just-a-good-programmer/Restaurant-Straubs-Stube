<?php 
include '../connecties database/conn.php';

$sql = "UPDATE Menu SET naam = :naam, ingredienten = :ingredienten, prijs = :prijs WHERE itemnr = :itemnr";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':naam', $naam);
$stmt->bindParam(':ingredienten', $ingredienten);
$stmt->bindParam(':prijs', $prijs);
$stmt->bindParam(':itemnr', $itemnr);
$stmt->execute();