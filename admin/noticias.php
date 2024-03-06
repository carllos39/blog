<?php 
require_once "../inc/cabecalho-admin.php";
require_once "../inc/funcao-noticias.php";
$idUsuario=$_SESSION['id'];

$tipoUsuario=$_SESSION['tipo'];

$listaDeNoticias=lerNoticias($conexao,$idUsuario,$tipoUsuario);
?>
<div>
    <article>
        <h2>Noticias <span><?=count($listaDeNoticias)?></span></h2>
        <p><a href="noticia-insere.php"></a>Inserir nova noticia</p>
        <div>
            <table>
                <tr>
                    <th>Titulo</th>
                    <th>Data</th>
                    <?php if($tipoUsuario=="admin"){?>
                     <th>Autor</th>
                     <th>Operações</th>
                  <?php  } ?>
                </tr>
                <?php foreach($listaDeNoticias as $noticia){ ?>
                    <tr>
                        <td><?=$noticia['titulo']?></td>
                        <td><?=formatarData($noticia['data'])?></td>
                        <?php if($tipoUsuario=="admin") { ?>
                        <td><?=$noticia['autor']?></td>
                        <?php } ?>
                        <td><a href="noticia-atualiza.php?id=<?=noticia['id']?>">Atualizar</a></td>
                        <td><a href="noticia-excluir.php?id=<?=noticia['id']?>">Excluir</a></td> 
                    </tr>
                    <?php } ?>
            </table>
        </div>
    </article>
</div>