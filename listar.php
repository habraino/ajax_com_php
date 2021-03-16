<?php
    header('Content-Type: application/json');

    $pdo = new PDO('mysql:host=localhost; dbname=crud;', 'habraino', 'hAck12@2021');

    $stmt = $pdo->prepare('SELECT * FROM tbl_comment');
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo(json_encode($stmt->fetchAll(PDO::FETCH_ASSOC)));
    } else {
        echo(json_encode('Error to load data!'));
    }