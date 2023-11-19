<?php
session_start();

if (isset($_POST["email"]) && $_POST["senha"]) {

    $email = $_POST["email"];
    $password = $_POST["email"];

    $senha = password_hash($password, PASSWORD_DEFAULT);


    require "utils/connection.php";

    $pdo = mysqlConnect();

    try {
        $sql = "SELECT CUSTOMER_ID FROM CUSTOMER WHERE CUSTOMER_EMAIL = :email AND PASSWORD_HASH = :senha";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $nome);
        $stmt->bindParam(':senha', $senha);

        $stmt->execute();


        if ($userID = $stmt->fetch()) {
            echo <<<HTML
        <h1> <b>SENHA INCORRETA!! REDIRECIONANDO EM 3 SEGUNDOS</b></h1> 
        HTML;
            sleep(3);
            header("Location: ../cadastro.php");

        } else {
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["senha"] = $_POST["senha"];
            $_SESSION["customer_id"] = $userID;

            header("Location: ../private/profile.php");

        }


    } catch (Exception $e) {
        exit('Ocorreu uma falha: ' . $e->getMessage());
    }
}

?>