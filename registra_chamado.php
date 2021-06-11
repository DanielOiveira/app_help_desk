<?php

session_start();


$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto =  $_SESSION['id'] .'#'. $titulo .'#'. $categoria .'#'. $descricao . PHP_EOL;

//abre arquivo
$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

//escreve arquivo
fwrite($arquivo, $texto);

//echo $texto;
//fecha arquivo
fclose($arquivo);

header('Location: abrir_chamado.php');



?>