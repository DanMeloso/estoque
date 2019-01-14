<?php
    $username = 'root';
    $password = '';

    try{
        $conn = new PDO('mysql:host=localhost;dbname=estoque', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $codigo = 1;

        $stmt = $conn->prepare('SELECT * FROM produtos where codigo = :codigo');
        $stmt->execute(array('codigo' => $codigo));

        while ($row = $stmt->fetch()){
            print_r($row);
        }

    } catch (PDOException $e){
        echo 'ERRO ao conectar: ' . $e->getMessage();
    }


?>

<html>
    <p>Olá</p>

</html>
