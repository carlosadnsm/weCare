<?php
session_start();

if (isset($_POST["email"]) && $_POST["senha"]) {

    require "utils/connection.php";

    $email = $_POST["email"];
    $password = $_POST["senha"];


    $pdo = mysqlConnect();

    try {
        $sql = "SELECT CUSTOMER_ID FROM CUSTOMER WHERE CUSTOMER_EMAIL = :email ";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);

        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
                
            $_SESSION["email"] = $result["CUSTOMER_EMAIL"];
            $_SESSION["senha"] = $result["PASSWORD_HASH"];
            $_SESSION["customer_id"] = $result['CUSTOMER_ID'];
            
            echo $_SESSION["email"] ."" . $_SESSION["senha"] . "" . $_SESSION["customer_id"];


            header("Location: ../scripts/getProfile.php");

        } else {

            echo <<<HTML
            <h1> <b>USUARIO INCORRETO!! REDIRECIONANDO EM 3 SEGUNDOS</b></h1> 
            HTML;
              
                header("Location: ../login.php");

          

        }


    } catch (Exception $e) {
        exit('Ocorreu uma falha: ' . $e->getMessage());
    }
}

?>