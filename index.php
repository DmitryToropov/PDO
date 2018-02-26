<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$data = '';

try {
$pdo = new PDO("mysql:host=$servername;dbname=forum", $username, $password);
echo "Connected successfully";
$stmt = $pdo->prepare('select * from `table_name`');
$stmt->execute();
$data = $stmt->fetchAll();
} catch (PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
?>