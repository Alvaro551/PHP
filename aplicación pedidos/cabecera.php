<header>
 Usuario: <?php echo $_SESSION['usuario']['correo']?>
 <a href="categorias.php">Home</a>
 <a href="carrito.php">Ver carrito</a> 
 <a href="logout.php">Cerrar sesión</a>
 <?php
 if ($_SESSION['usuario']['rol'] == 1) {
    echo "<a href='administracion.php'>Administrador</a>";
 }

 ?>
</header>
<hr>