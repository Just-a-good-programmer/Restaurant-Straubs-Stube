<?php
include './connecties database/conn.php';

$sql = "SELECT * FROM Menu";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);