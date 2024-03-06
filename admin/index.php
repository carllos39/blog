<?php
require_once "../inc/cabecalho-admin.php"; 
?>
<article>
<div>
    <h2>Olá <?=$_SESSION['nome']?></h2>
    <p>Você está no <b>painel de administração</b> do site Blog e seu <b>nível de acesso</b>
    <?=$_SESSION['tipo']?></p>
    <hr>

    <a href="meu-perfil.php">Meu Perfil</a>
    <?php if($_SESSION['tipo']=='admin'){?>
        <a href="usuarios.php">Gerenciar usuarios</a>
        <?php } ?>
        <a href="noticias.php">Gerenciar noticias</a>
    </div>
</article>
<?php
require_once "../inc/rodape-admin.php"; 
?>