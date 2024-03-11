<?php 
require "../inc/funcao-sessao.php";
require "../inc/funcao-usuario.php";
require "../inc/cabecalho.php";

if(isset($_GET['acesso-negado'])){
$mensagem="Você deve logar primeiro!";
}elseif(isset($_GET['dados-incorretos'])){
    $mensagem="Dados incorretos, verifique!";
}elseif(isset($_GET['saiu'])){
    $mensagem="Você saiu do sistema!";
}elseif(isset($_GET['campo-obrigatorio'])){
    $mensagem="Preencha o campo de email e senha!";
}

if(isset($_POST['entrar'])){
    if(empty($_POST['email'])|| empty($_POST['senha'])){
        header("Location:login.php?campo-obrigatorio");
        exit;
    }
    $email=mysqli_real_escape_String($conexao,$_POST['email']);
    $senha=mysqli_real_escape_String($conexao,$_POST['senha']);

    $usuario=buscaUsuario($conexao,$email);

    if($senha != null && password_verify($senha,$usuario['senha'])){
        login($usuario['id'],$usuario['nome'],$usuario['tipo']);
        header("Location:admin/index.php");
    }else{
        header("Location:login.php?dados-incorreto");
        exit;
    }

}
?>
<div>
    <h2>Acesso a area admistrativa</h2>

    <form action="" method="post">
        <?php if(isset($mensagem)){?>
            <p class="my-2 alert alert-wanning text-center"><?=$mensagem?></p>
       <?php }
        ?>
                        <label class="form-label" for="email">Email</label>
                <input value="<?=$usuario['email']?>" class="form-control" type="email" name="email" id="email">
            </div>
            <div class="mb-3">
                <label class="form-label" for="senha">Senha</label>
                <input  class="form-control" type="password" name="senha" id="senha">
            </div>
            <button type="submit" name="entrar">Inserir</button>
    </form>
</div>
<?php 
require_once "../inc/rodape.php";
?>