<?php
require_once "../inc/cabecalho-admin.php"; 
?>

<article>
    <div>
        <h2>Não autorizado</h2>
        <hr>
        <p>Descupe <b><?=$_SESSION['nome']?></b>, mas você <span>não tem permissão</span>para acessar este recurso</p>
        <p><a href="index.php">Voltar para página inicial</a></p>
    </div>
</article>
<?php
require_once "../inc/rodape-admin.php"; 
?>