<?php
    header('Content-Type: application/json');

    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $pdo = new PDO('mysql:host=localhost; dbname=crud;', 'habraino', 'hAck12@2021');

    $stmt = $pdo->prepare("INSERT INTO tbl_comment (name, comment) VALUES (:na, :co)");
    $stmt->bindValue(':na', $name);
    $stmt->bindValue(':co', $comment);
    $stmt->execute();

    if ($stmt->rowCount() >= 1)  {
        echo(json_encode("Data was saved successfully!"));
    } else {
        echo(json_encode("Erro to save the data!"));
    }

