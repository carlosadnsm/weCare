<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    function recovery_path_file($file){

        $target_dir = 'uploads/';
        // Define o caminho completo do arquivo
        $target_file = $target_dir . basename($_FILES['image']['name']);
        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
          // Define o caminho do arquivo para salvar no banco de dados
          $image_path = $target_file;
    
        } else {
          echo 'Ocorreu um erro ao fazer upload da imagem.';
        }

        return  $image_path;

    }

    if (
        isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["dataNascimento"])
        && isset($_POST["celular"]) && isset($_POST["documento"]) && isset($_POST["genero"])
        && isset($_POST["foto"]) && isset($_POST["senha"])
    ) {
        require_once "./utils/connection.php";
        require_once "../models/customer.php";

        $conn = new Conexao();

        $sql = "INSERT INTO CUSTOMER VALUES CUSTOMER_NAME = ?, CUSTOMER_EMAIL = ?, CUSTOMER_DATE = ?, CUSTOMER_PHONE_NUMBER = ?, CUSTOMER_DOCUMENT = ?, CUSTOMER_GENDER = ?, PASSWORD_HASH = ?, IMAGE_PATH = ?";
        $stmt = $conn->conexao->prepare($sql);

        $password_hashed = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $formated_date = date("Y-m-d H:i:s", $_POST["dataNascimento"]);
        $image_path = recovery_path_file($_POST["foto"]);

        $stmt->bindParam(1, $_POST["nome"]);
        $stmt->bindParam(2, $_POST["email"]);
        $stmt->bindParam(3, $formated_date);
        $stmt->bindParam(4, $_POST["celular"]);
        $stmt->bindParam(5, $_POST["documento"]);
        $stmt->bindParam(6, $_POST["genero"]);
        $stmt->bindParam(7, $image_path);
        $stmt->bindParam(8, $password_hashed);

        $resultado = $stmt->execute();

        if ($stmt->rowCount() == 1) {

            $usuario = new Customer();

            while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                $usuario->setName($rs->nome);
                $usuario->setEmail($rs->email);
                $usuario->setDate($rs->dataNascimento);
                $usuario->setPhone($rs->telefone);
                $usuario->setDocument($rs->documento);
                $usuario->setGender($rs->genero);
                $usuario->setPassword_hashed($rs->senha);
                $usuario->setImage_path($rs->imagem);
            }

            $_SESSION["nome"] = $_POST["nome"];

            header("Location: cadastro.html");
        } else {
            echo "Usuário ou senha inválidos";
        }
    }
}

?>