<?php 
require_once "../inc/funcao-usuario.php";
require_once "../inc/cabecalho-admin.php";

$listaDeUsuarios=listaUsuario($conexao);
?>
<div>
    <article>
        <h2>Lista de Usuarios <span><?=count($listaDeUsuarios)?></span></h2>

        <p class="text-center mt-5">
            <a class="bnt bnt-primary" href="usuario-insere.php"> 
            <i class="bi bi-plus-circle">Inserir novo usuário</i> ></a>
        </p>
        <table class="table table-hover">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Tipo</th>
            </tr>
            <?php foreach ($listaDeUsuarios as $usuario) {?>
                <tr>
                    <td><?=$usuario['nome']?></td>
                    <td><?=$usuario['email']?></td>
                    <td><?=$usuario['tipo']?></td>
                    <td><a href="usuario-atualizar.php?id=<?=$usuario['id']?>">Atualizar</a></td>
                    <td><a href="usuario-excluir.php?id=<?=$usuario['id']?>">Excluir</a></td>
                </tr>
            
           <?php } ?>

        </table>
    </article>
</div>
<?php 
require_once "../inc/rodape-admin.php";
?>