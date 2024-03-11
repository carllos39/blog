<?php 
require "inc/funcao-noticias.php";
require "inc/cabecalho.php";
$termoDigitado=mysqli_real_escape_String($conexao,$_GET['busca']);
$ResultadoDaBusca=busca($conexao,$termoDigitado);
?>
<div>
    
        <h2>Você procurou por<?=$termoDigitado?> obteve <span>count(<?=$ResultadoDaBusca?>)</span>resultados</h2>
        <p>
        <time><?=formataData($dadosDaNoticias['data'])?></time>- <span><?=$dadosDaNoticias['autor']?>resultados</span>
        </p>
        <?php foreach($ResultadoDaBusca as $noticias ){ ?>
            <h3><?=$noticias['titulo']?></h3>
            <p>
            <time><?=formataData($noticias['data'])?></time>- <span><?=$noticias['resumo']?></span>
            </p>
            <a href="noticias.php?id="<?=$noticias['id']?>>Continua lendo</a>
            <?php }?>
     <article>

     </article>
</div>
<?php 
require_once "inc/rodape.php";
?>