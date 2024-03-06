<?php 
require "inc/funcao-noticias.php";
require "inc/cabecalho.php";
$listaDeNoticias=lerTodasNoticias($conexao);
?>

<?php foreach($listaDeNoticias as  $noticia){?>
    

<div>
    <article>
        <a href="noticia.php?id=<?=$noticia['id']?>"></a>
        <img src="imagens/<?=$noticia['imagem']?>" alt="">
        <h3><?=$noticia['titulo']?></h3>
        <p><?=$noticia['resumo']?></p>
    </article>

</div>

<?php } ?>

<?php 
require_once "inc/rodape.php";
?>