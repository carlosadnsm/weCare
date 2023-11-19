<?php

    require "utils/connection.php";
    
    $pdo = mysqlConnect();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $dataNascimento = $_POST['dataNascimento'];
    $celular = $_POST['celular'];
    $documento = $_POST['documento'];
    $genero = $_POST['genero'];
    $foto = $_POST['foto'];
    $senha = $_POST['senha'];

    $password_hashed = password_hash($senha, PASSWORD_DEFAULT);

    try {
        $sql = "INSERT INTO CUSTOMER (CUSTOMER_NAME, CUSTOMER_EMAIL, CUSTOMER_DATE, CUSTOMER_PHONE_NUMBER, CUSTOMER_DOCUMENT, CUSTOMER_GENDER, IMAGE_PATH, PASSWORD_HASH) VALUES (:nome, :email, :dataNascimento, :celular, :documento, :genero, :foto, :senha)";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':dataNascimento', $dataNascimento);
        $stmt->bindParam(':celular', $celular);
        $stmt->bindParam(':documento', $documento);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':foto', $foto);
        $stmt->bindParam(':senha', $password_hashed);

        $stmt->execute();

        echo "Dados inseridos com sucesso!";
    
    } catch (Exception $e) {
        exit('Ocorreu uma falha: ' . $e->getMessage());
    }
   
?>