<?php 
require "inc/funcao-noticias.php";
require "inc/cabecalho.php";
$idNoticias=mysqli_real_escape_String($conexao,$_GET['id']);
$dadosDaNoticias=lerDetalhes($conexao,$idNoticias);
?>
<div>
    <article>
        <h2><?=$dadosDaNoticias['titulo']?></h2>
        <p>
        <time><?=formataData($dadosDaNoticias['data'])?></time>- <span><?=$dadosDaNoticias['autor']?></span>
        </p>
        <img src="imagens/<?=$dadosDaNoticias['imagem']?>" alt="">
        <p><?=$dadosDaNoticias['texto']?></p>
    </article>
</div>
<?php 
require "inc/rodape.php";
?>
