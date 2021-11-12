<?php

require_once 'connection.php';

$stmt = $pdo->query('SELECT * FROM authors');

if ( isset($_POST['']))

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add_book.php" method="post">
        Pealkiri: <input type="text" name="title">
        <br>
        Autor: <select name="author">
            <?php while ( $author = $stmt->fetch() ): ?>
                <option value="<?= $author['id']; ?>"><?= $author ['first_name']; ?>
                <?= $author ['last_name']; ?>
                </option>
            <?php endwhile; ?>
            </select>
            <br><br>
            <input type="submit" name="submit" value="Lisa">
    </form>
</body>
</html>
