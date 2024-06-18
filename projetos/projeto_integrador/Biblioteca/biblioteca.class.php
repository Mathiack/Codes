<?php 
    //include "biblioteca.php";
    //include "conexao.php";
    class Biblioteca {

        public $tituloLivro, $autorLivro, $ISBN, $editora, $estado;

        public function setTitulo($tituloLivro) {
            $this->tituloLivro = $tituloLivro;
        }
        public function getTitulo() {
            return $this->tituloLivro;
        }

        public function setAutor($autorLivro) {
            $this->autorLivro = $autorLivro;
        }
        public function getAutor() {
            return $this->autorLivro;
        }

        public function setISBN($ISBN) {
            $this->ISBN = $ISBN;
        }
        public function getISBN() {
            return $this->ISBN;
        }

        public function setEditora($editora) {
            $this->editora = $editora;
        }
        public function getEditora() {
            return $this->editora;
        }

        function inserirLivro() {
            $database = new Conexao(); //nova instancia da conexao
            $db = $database->getConnection(); //tenta conectar
            
            $sql = "INSERT INTO livro (Nome, Autor, ISBN, Editora, Estado) VALUES (:Nome, :Autor, :ISBN, :Editora, :Estado)";
            try {
                $stmt = $db->prepare($sql);
    
                $stmt->bindParam(':Nome', $this->tituloLivro);
                $stmt->bindParam(':Autor', $this->autorLivro);
                $stmt->bindParam(':ISBN', $this->ISBN);
                $stmt->bindParam(':Editora', $this->editora);
                $stmt->bindParam(':Estado', $this->estado);
                $stmt->execute();
                return true;
            } catch(PDOExeption $e) { //if(erro==true) {echo $this->mensagem;}
                echo "Erro ao inserir pessoa: " . $e->getMessage();
                return false;
            }
        }

        
        function listarLivros() {
            $database = new Conexao(); //nova instancia da conexao
            $db = $database->getConnection(); //tenta conectar
    
            $sql = "Select * from livro";
    
            try {
                $stmt = $db->query($sql);
                $rs = $stmt->fetchAll(PDO::FETCH_ASSOC); //rs = result -> resultado  ::::: fetchAll == ecncapsula realizando o processo concatenativo em todos os itens/objetos presentes no ambiente
                return $rs;
            } catch(PDOExeption $e) {
                echo 'Erro ao listar livro(s): ' . $e->getMessage();
                $rs = [];
                return $rs;
            }
        }
    }
?>