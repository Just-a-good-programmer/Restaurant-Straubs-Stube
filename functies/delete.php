<?php
include '../connecties database/conn.php';

$sql = "DELETE FROM Menu WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute();