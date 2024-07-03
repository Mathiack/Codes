<?php 
function listarUmLivro($id) {
            $database = new Conexao();
            $db = $database->getConnection();

            $sql = "SELECT * FROM livro WHERE ID_Livro = :id";

            try {
                $stmt = $db->query($sql);                                                                                                                                                                                                                                                                                                           
                $rs = $stmt->fetchAll(PDO::FETCH_ASSOC); //rs = result -> resultado  ::::: fetchAll == ecncapsula realizando o processo concatenativo em todos os itens/objetos presentes no ambiente
                return $rs;                          
            } catch(PDOException $e) {
                echo 'Erro ao listar UM livro: ' . $e->getMessage();
                $rs = [];
                return $rs;
            }
        }