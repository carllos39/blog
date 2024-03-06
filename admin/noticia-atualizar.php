<?php
require_once "../inc/funcao-noticias.php"; 
require_once "../inc/cabecalho-admin.php";
$idNoticias=mysqli_real_escape_String($conexao,$_GET['id']); 
$idUsuario=$_SESSION['id'];
$tipoUsuario=$_SESSION['tipo'];

$noticias=lerUmaNoticia($conexao,$idNoticias,$idUsuario,$tipoUsuario);

if(isset($_POST['atualizar'])){
    $titulo=$_POST['titulo'];
    $texto=$_POST['texto'];
    $resumo=$_POST['resumo'];

    if(empty($_FILES['imagem']['name'])){
        $imagem=$_POST['imagem-existente'];
    }else{
        $imagem=$_POST['imagem']['name']; 
        upload($_FILES['imagem']); 
    }
    atualizarNoticias($conexao,$titulo,$texto,$resumo,$imagem,$idNoticias,$idUsuario,$tipoUsuario);
    header("Location:noticias.php");

}
?>
<div>
    <article>
        <h2>Atualizar dados da noticias</h2>
        <form action="" enctype="multipart/form-data" method="post" name="form-atualizar">
            <div>
                <label for="titulo">Titulo</label>
                <input <?=$noticia['titulo']?> type="text" name="titulo" id="titulo">
            </div>
            <div>
                <label for="texto">Texto</label>
                <input <?=$noticia['texto']?> type="text" name="texto" id="texto">
            </div>
            <div>
                <label for="resumo">Resumo</label>
                <input <?=$noticia['resumo']?> type="text" name="resumo" id="resumo">
            </div>
            <div>
                <label for="imagem">Caso queira mudar, selecione outra imagem</label>
                <input <?=$noticia['imagem']?> type="file" name="imagem" id="imagem" 
                accept="image/png,image/jpeg,image/gif,image/svg+xml">
            </div>
            <button name="atualizar">Atualizar</button>
        </form>
    </article>
</div>
<?php 
require_once "../inc/rodape-admin.php";
?>