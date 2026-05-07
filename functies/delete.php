<?php
include '../connecties database/conn.php';

$itemnr = $_POST['itemnr'];

$sql = "DELETE FROM Menu WHERE itemnr = :itemnr";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':itemnr', $itemnr);
$stmt->execute();

header('Location: ../admin.php');