<?php
    include_once 'conexao.php';

    $select = $conn->query("SELECT * FROM produtos");

    while ($registro = $select->fetch(PDO::FETCH_OBJ)){
        echo $registro->descricao . '<br>';}
?>

<html>
    <head>
        <title>Estoque</title>
    </head>
    <body>

        <h1>Incluir</h1>
        <form action="incluir_produto.php" method="post">
            <input type="text" name="descricao">


            <input type="submit">
        </form>
    </body>
</html>
