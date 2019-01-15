<?php
    include_once 'conexao.php';
    $descricao = $_POST['descricao'];

    $stmt = $conn->prepare('INSERT INTO produtos (descricao) VALUES (:descricao)');
    $stmt->execute(array(':descricao' => $descricao));

    echo $stmt->rowCount();
    echo 'ok';
?>