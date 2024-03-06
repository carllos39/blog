<?php 
require "../inc/funcao-sessao.php";
require "../inc/funcao-noticia.php";

$idNoticias=mysqli_real_escape_String($conexao,$_GET['id']); 
$idUsuario=$_SESSION['id'];
$tipoUsuario=$_SESSION['tipo'];

$noticias=lerUmaNoticia($conexao,$idNoticias,$idUsuario,$tipoUsuario);
?>