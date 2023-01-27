<?php
$jsonData = file_get_contents(__DIR__ . "./data.json");
$discList = json_decode($jsonData, true);

header('Content-Type: application/json');

echo json_encode($discList);
