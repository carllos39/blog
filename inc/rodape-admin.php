</div>
    </main>
<footer>
    <div>
   Bolg é um site desenvolvido para fins didáticos|SenacPenha &copy;2024     
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php
switch($pagina){
    case 'usuarios.php';
    case 'noticias.php';
?>
<script src="js/confirm.js"></script>
<?php
break;
 case 'noticia-insere.php';
 case 'noticia-altera.php';
 ?>
 <script src="js/contador.js"></script>
 <?php
 break;
}
?>
</body>
</html>