<?php 
require_once "../inc/funcao-usuario.php";
require_once "../inc/cabecalho-admin.php";
$id=$_GET['id'];

$usuario=lerUmUsuario($conexao,$id);
if(isset($_POST['atualizar'])){
$nome=$_POST['nome'];
$email=$_POST['email'];
$tipo=$_POST['tipo'];

if(empty($_POST['senha'])|| password_verify($_POST['senha'],$usuario['senha'])){
    $senha=$usuario['senha'];
}else{
    $senha=password_hash($_POST['senha'],PASSWORD_DEFAULT);
}
atualizarUsuario($conexao,$id,$nome,$email,$tipo);
header("Location:usuarios.php");
}
?>