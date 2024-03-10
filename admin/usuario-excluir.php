<?php 
require "funcao-sessao.php";
require "../inc/funcao-usuario.php";

verificarAcesso();
$id=$_GET['id'];

excluirUsuario($conexao,$id);
header("Location:usuarios.php");

?>