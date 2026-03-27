<?php
include '../connecties database/conn.php';

$sql = ($conn->prepare("SELECT * FROM Menu;"));

$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);