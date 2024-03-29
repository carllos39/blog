<?php 
require_once "../inc/funcao-usuario.php";
require_once "../inc/cabecalho-admin.php";
$id=$_GET['id'];

$usuario=lerUmUsuario($conexao,$id);
if(isset($_POST['atualizar'])){
$nome=$_POST['nome'];
$email=$_POST['email'];
$tipo=$_POST['tipo'];

if(empty($_POST['senha'])|| password_verify($_POST['senha'],$usuario['senha'])){
    $senha=$usuario['senha'];
}else{
    $senha=password_hash($_POST['senha'],PASSWORD_DEFAULT);
}
atualizarUsuario($conexao,$id,$nome,$email,$tipo);
header("Location:usuarios.php");
}
?>

<div>
    <article>
        <h2>Atualizar dados do usuário</h2>

        <form action="">
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

                <option <?php if($usuario['tipo']==="editor") echo "selected";?> value="editor">Editor</option>

                <option <?php if($usuario['admin']==="admin") echo "selected";?> value="admin">Admin</option>
               </select>
            </div>
            <button type="submit" name="atualizar">Atualizar</button>
        </form>
    </article>
</div>

<?php 
require_once "../inc/rodape-admin.php";
?>
