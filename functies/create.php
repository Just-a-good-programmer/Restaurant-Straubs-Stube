<?php
include '../connecties database/conn.php';
$naam = $_POST['naam'];
$ingredienten = $_POST['ingredienten'];
$prijs = $_POST['prijs'];

$sql = "INSERT INTO Menu (naam, ingredienten, prijs) VALUES (:naam, :ingredienten, :prijs)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":naam", $naam);
$stmt->bindParam(":ingredienten", $ingredienten);
$stmt->bindParam(":prijs", $prijs);
$stmt->execute();

header("Location: ../admin.php");