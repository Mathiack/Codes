<?php
    class Conexao {

        private $host = 'localhost'; //Endereco do servidor show de bola
        private $db_name = 'teste.bd'; //Nome do banco joia
        private $username = 'root'; //Nome do usuario muito é massa
        private $password = '' ; //Senha ultrasecreta anti brute force indescobrivel
        private $conn;

        public function getConnection() {
            $this->conn = null;

            try { //tentando conectar
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);     
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOExeption $e) {
                echo 'Erro de Conexão: ' . $e->getMessage();
            }
        return $this->conn;
        }
    }
?>