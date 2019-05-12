<?php
$dsn = 'mysql:host=localhost;dbname=TrabalhoAlexandre';
$username = 'root';
$password = 'senha';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}


