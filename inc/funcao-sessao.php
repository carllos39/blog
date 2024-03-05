<?php 
if(!$_SESSION){
    session_start();
}

function verificaAcesso(){
    if(!$_SESSION['id']){
        session_destroy();
        header("Location:../login.php?acesso-negado");
    }
}

function login($id,$nome,$tipo){
    $_SESSION['id']=$id;
    $_SESSION['nome']=$nome;
    $_SESSION['tipo']=$tipo;

     
    }

function logout(){
    session_destroy();
    header("Location:../login.php?saiu");
    exit;
}
function verificarTipo(){
    if($_SESSION['tipo' !='admin']){
        header("Location:nao-autorizado.php");
    }
  
}

?>