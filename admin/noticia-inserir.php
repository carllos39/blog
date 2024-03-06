<?php
require_once "../inc/funcao-noticias.php"; 
require_once "../inc/cabecalho-admin.php";


if(isset($_POST['atualizar'])){
    $titulo=htmlspecialchars($_POST['titulo']);
    $texto=htmlspecialchars($_POST['texto']);
    $resumo=htmlspecialchars($_POST['resumo']);

    $usuarioId=$_SESSION['id'];

    $imagem=$_FILES['imagem'];

    upload($imagem);

    inserirNoticias($conexao,$titulo,$texto,$resumo,$imagem['imagem'],$idUsuario);
    header("Location:noticias.php");

}
?>
<div>
    <article>
        <h2>Inserir dados da noticias</h2>
        <form action="" enctype="multipart/form-data" method="post" name="form-inserir">
            <div>
                <label for="titulo">Titulo</label>
                <input  type="text" name="titulo" id="titulo">
            </div>
            <div>
                <label for="texto">Texto</label>
                <input  type="text" name="texto" id="texto">
            </div>
            <div>
                <label for="resumo">Resumo(Maximo 300 caracteres)</label>
                <input  type="text" name="resumo" id="resumo">
            </div>
            <div>
                <label for="imagem">Selecione uma imagem</label>
                <input  type="file" name="imagem" id="imagem" 
                accept="image/png,image/jpeg,image/gif,image/svg+xml">
            </div>
            <button name="inserir">Inserir</button>
        </form>
    </article>
</div>
<?php 
require_once "../inc/rodape-admin.php";
?>