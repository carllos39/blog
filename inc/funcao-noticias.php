<?php 
require "conecta.php";

function inserirNoticias($conexao,$titulo,$texto,$resumo,$nomeImagem,$usuarioId){
    $sql="INSERT INTO noticias(titulo,texto,resumo,imagem,usuario_id) VALUES('$titulo,$texto,$resumo,$nomeImagem,$usuarioId')";
    mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
}

function upload($arquivo){
    $tiposValidos=["image/png","image/jpeg","image/gif","image/svg+xml"];

    if(!in_array($arquivo['type'],$tiposValidos)){
        echo"<script>alert('Formato inválido!')</script>";
        exit;
    }
    $nome=$arquivo['name'];

    $temporario=$arquivo['tmp_name'];

    $destino="../imagens" . $nome;

    move_uploaded_file($temporario,$destino);
}
function lerNoticias($conexao,$idUsuario,$tipoUsuario){
    if($tipoUsuario =="admin"){
        $sql="SELECT noticias.id,noticias.titulo,noticias.data,usuario.nome AS autor
        FROM noticias JOIN usuario ON noticias.usuario_id";
    }else{
        $sql="SELECT id,titulo,data FROM noticias WHERE usuario_id=$idUsuario ORDER BY data DESC";
        $resultado=mysqli_fetch_all($resultado,MYSQLI_ASSOC);
    }

Function formataData($data){
    $dataFormatada=date("d/m/Y H:i" ,strtotime($data));
    return $dataFormatada;
}
function lerUmaNoticias($conexao,$idNoticias,$idUsuario,$tipoUsuario){
    if($tipoUsuario =="admin"){
$sql="SELECT * FROM noticias WHERE id=$idNoticias";
    }else{
        $sql="SELECT * FROM noticias WHERE id=$idNoticias AND usuario_id=$idUsuario ";
    }
}

function atualizarNoticias($conexao,$titulo,$texto,$resumo,$imagem,$idNoticias,$idUsuario,
$tipoUsuario){
    if($tipoUsuario=="admin"){
$sql="UPDATE noticias SET titulo='$titulo',texto='$texto',resumo='$resumo',imagem='$imagem' WHERE id=idNoticias";
    }else{
 $sql="UPDATE noticias SET titulo='$titulo',texto='$texto',resumo='$resumo',imagem='$imagem' WHERE id=idNoticias AND usuario_id=$idUsuario";
    }
}
mysqli_query($conexao,$sql) or die(error($conexao));
}
function excluirNoticias($conexao,$idNoticias,$idUsuario,$tipoUsuario){
    if($tipoUsuario=="admin"){
$sql="DELETE FROM noticias WHERE id=idNoticias";
    }else{
        $sql="DELETE FROM noticias WHERE id=idNoticias AND usuario_id=$idUsuario";
    }
    mysqli_query($conexao,$sql) or die(error($conexao));
}
function lerTodasNoticias($conexao){
    $sql="SELECT titulo,resumo,imagem,id FROM noticias ORDER BY data DESC";
    $resultado= mysqli_query($conexao,$sql) or die(error($conexao));
    $resultado=mysqli_fetch_all($resultado,MYSQLI_ASSOC);
}
function lerDetalhes($conexao,$id){
$sql="SELECT  
noticias.data,
noticias.titulo,
noticias.imagem,
noticias.texto,
usuario.nome As autor
FROM noticias JOIN usuario
ON noticias.usuario_id=usuario.id 
WHERE noticias.id=$id ORDER BY data DESC
";
$resultado= mysqli_query($conexao,$sql) or die(error($conexao));
$resultado=mysqli_fetch_assoc($resultado);
}

function busca($conexao,$termoDigitado){
$sql="SELECT * FROM noticias WHERE titulo LIKE '%$termoDigitado%' or resumo LIKE '%$termoDigitado%' or texto LIKE '%$termoDigitado%' ORDER BY data DESC";
$resultado= mysqli_query($conexao,$sql) or die(error($conexao));
$resultado=mysqli_fetch_all($resultado,MYSQLI_ASSOC);
}
?>