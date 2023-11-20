<?php

    require "utils/connection.php";
    
    $pdo = mysqlConnect();

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $foto = $_POST['foto'];

    try {
        $sql = "INSERT INTO PRODUCT_ITEM (PRODUCT_NAME, PRICE, DESCRIPTION, IMAGE_PATH) VALUES (:nome, :preco, :descricao, :foto)";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':foto', $foto);

        $stmt->execute();

        echo "Dados inseridos com sucesso!";

        header("Location: ../login.php");
    
    } catch (Exception $e) {
        exit('Ocorreu uma falha: ' . $e->getMessage());
    }
   
?>