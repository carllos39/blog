<?php 
require_once "../inc/funcao-usuario.php";
require_once "../inc/cabecalho-admin.php";

verificaTipo();

if(isset($_POST['inserir'])){
$nome=$_POST['nome'];
$email=$_POST['email'];
$tipo=$_POST['tipo'];


$senha=password_hash($_POST['senha'],PASSWORD_DEFAULT);

inserirUsuario($conexao,$nome,$email,$tipo);
header("Location:usuarios.php");
}
?>

<div>
    <article>
        <h2>Inserir dados do usuário</h2>

        <form action="" method="post" name="form-inserir" >
            <div class="mb-3">
                <label class="form-label" for="nome">Nome</label>
                <input value="<?=$usuario['nome']?>" class="form-control" type="text" name="nome" id="nome">
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input value="<?=$usuario['email']?>" class="form-control" type="email" name="email" id="email">
            </div>
            <div class="mb-3">
                <label class="form-label" for="senha">Senha</label>
                <input  class="form-control" type="password" name="senha" id="senha">
            </div>
            <div class="mb-3">
                <label class="form-label" for="tipo">Tipo</label>
               <select name="tipo" id="tipo">
                <option value=""></option>
                <option value="editor">Editor</option>
                <option value="admin">Administrador</option>

              
               </select>
            </div>
            <button type="submit" name="inserir">Inserir</button>
        </form>
    </article>
</div>

<?php 
require_once "../inc/rodape-admin.php";
?>