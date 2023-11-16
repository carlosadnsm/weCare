<?php
class Conexao {
    public $conexao;

    function __construct() {
        if (!isset($this->conexao)) {
            try {
                $this->conexao = new PDO('mysql:host=sql304.infinityfree.com;dbname=if0_35231810_Wecare', 'if0_35231810', '1QYDuHZnpllnF');
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }

    function fecharConexao(){
        if (isset($this->conexao)) {
            $this->conexao = null;
        }
    }
}
?>