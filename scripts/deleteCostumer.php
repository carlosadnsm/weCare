<?php

    require "utils/connection.php";
    
    $pdo = mysqlConnect();

    $documento = $_SESSION['documento'];

    try {
        $sql = "DELETE FROM CUSTOMER WHERE CUSTOMER_ID = (SELECT CUSTOMER_ID FROM CUSTOMER WHERE CUSTOMER_DOCUMENT = :documento)";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':documento', $documento);

        $stmt->execute();

        echo "Dado removido com sucesso!";
    
    } catch (Exception $e) {
        exit('Ocorreu uma falha: ' . $e->getMessage());
    }
   
?>