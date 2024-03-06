<?php
require_once "../inc/cabecalho-admin.php"; 
?>
<div>
    <article>
        <h2>Atualizar meus dados</h2>
        <form action="" method="post" name="form-atualizar">
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>
        <button name="atualizar" >Atualizar</button>
        </form>

    </article>
</div>
<?php
require_once "../inc/rodape-admin.php"; 
?>