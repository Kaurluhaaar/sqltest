<?php

$host = 'd101915.mysql.zonevs.eu';
$db   = 'd101915_books';
$user = 'd101915_tak202';
$pass = 'Roosakartul1';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$stmt = $pdo->query('SELECT * FROM books');
while ($row = $stmt->fetch())
{
    echo "<a href='book.php?id=" . $row['id'] . "'>" . $row['title'] . "</a>" . "<br>";
}
