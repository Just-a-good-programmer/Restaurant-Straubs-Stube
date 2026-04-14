<?php
include '../connecties database/conn.php';

$sql = "INSERT INTO Menu (naam, ingredienten, prijs) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute();