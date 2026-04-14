<?php 
include '../connecties database/conn.php';

$sql = "UPDATE Menu SET naam = ?, ingredienten = ?, prijs = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute();