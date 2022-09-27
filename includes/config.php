<?php
ob_start(); // Turns on output buffering
session_start();

date_default_timezone_set("Europe/Istanbul");

try {
    $con = new PDO("mysql:dbname=netflix;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage());
}
?>