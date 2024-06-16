<?php 
    class Biblioteca {

        public $tituloLivro, $autorLivro, $ISBN;

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

        public function print() {
            
        }
    }
?>