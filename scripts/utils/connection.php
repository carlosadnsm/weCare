<?php

function mysqlConnect()
{
    $host = 'sql205.infinityfree.com';
    $usuario = 'if0_35439306';
    $senha = 'PANwoVJKDVUJzz';
    $banco = 'if0_35439306_ppi';

    $dsn = "mysql:host=$host;dbname=$banco;charset=utf8mb4";

    $options = [
      PDO::ATTR_EMULATE_PREPARES => false, // desativa a execução emulada de prepared statements
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // ativa o modo de erros para lançar exceções    
      PDO::ATTR_PERSISTENT    => true, // ativa o uso de conexões persistentes para maior eficiência
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // altera o modo padrão do método fetch para FETCH_ASSOC
    ];
  
    try {
      $pdo = new PDO($dsn, $usuario, $senha, $options);
      return $pdo;
    } 
    catch (Exception $e) {
      //error_log($e->getMessage(), 3, 'log.php');
      exit('Ocorreu uma falha na conexão com o BD: ' . $e->getMessage());
    }
}
?>