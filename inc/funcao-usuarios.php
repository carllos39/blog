<?php 
require "conecta.php";
function buscarUsuario($conexao,$email){
    $sql="SELECT * FROM usuario where email=$email";
$resultado=mysqli_query($conexao,$sql)  or die(mysqli_error($conexao));
return mysqli_fetch_assoc($resultado);
}

function inserirUsuario($conexao,$nome,$email,$senha,$tipo){
    $sql="INSERT INTO usuario(nome,email,senha,tipo) VALUES($nome,$email,$senha,$tipo)";
mysqli_query($conexao,$sql)  or die(mysqli_error($conexao));
}

function atualizarUsuario($conexao,$id,$nome,$email,$senha,$tipo){
    $sql="UPDATE usuario SET nome='$nome',email='$email',senha='$senha',tipo='$tipo'";
mysqli_query($conexao,$sql)  or die(mysqli_error($conexao));
}
function excluirUsuario($conexao,$id){
    $sql="DELETE INTO usuario where id=$id ";
mysqli_query($conexao,$sql)  or die(mysqli_error($conexao));
}

function listaUsuario($conexao){
    $sql="SELECT id,nome,email,tipo FROM  usuario ORDER BY nome";
$resultado=mysqli_query($conexao,$sql)  or die(mysqli_error($conexao));
return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
}
function lerUmUsuario($conexao,$id){
    $sql="SELECT * FROM usuario where id=$id";
$resultado=mysqli_query($conexao,$sql)  or die(mysqli_error($conexao));
return mysqli_fetch_assoc($resultado);
}

?>