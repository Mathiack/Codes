<?php 
    include 'biblioteca.class.php';

    $b = new Biblioteca();

    $tituloLivro = $_POST['titulo'];
    $b->setTitulo($tituloLivro);
    $autorLivro = $_POST['autor'];
    $b->setAutor($autorLivro);
    $ISBN = $_POST['isbn'];
    $b->setISBN($ISBN);

    $b->print();

?>