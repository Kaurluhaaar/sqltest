<?php

require_once 'connection.php';

$bookId = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM books b LEFT JOIN book_authors ba ON b.id=ba.book_id LEFT JOIN authors a ON a.id=ba.author_id where b.id =:id');
$stmt->execute([':id' => $_GET["id"]]);
$book = $stmt->fetch();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$book['title'] ?></title>
</head>
<body>
<div><img src="<?=$book['cover_path'] ?>"></div>
<h1><?=$book['title'] ?></h1>
<h2><?=$book['first_name']?><?=$book["last_name"]?></h2>
<a href="edit.php?id=<?=$bookId?>">MUUDA</a>
<a href="delete.php?id=<?=$bookId?>">KUSTUTA</a>
</body>
</html>
