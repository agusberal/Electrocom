<!doctype html>
<html lang="en">
<head>
  <?php
    include "../../Controlador/conexion.php";
    include "../../Modelo/Models/prod.php";
  ?>
  <title>inicio</title>
  <link rel="stylesheet" href="../Estilos/productos.css">
  <link rel="stylesheet" href="../Estilos/inicio.css">
  <link rel="stylesheet" href="../Estilos/main.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <script>
        function confirmLogout() {
            var confirmLogout = confirm("¿Estás seguro de que quieres cerrar sesión?");
            if (confirmLogout) {
                window.location.href = "../../index.php";
            }
        }
    </script>
</head>

<body>
  <header>
        <nav>
          <a href="../../index.php"><img class="logo" src="../Media/Logo1.png" alt=""></a>  
            <!-- <a href="produc.php" class="productos">Productos</a> -->
            <a href="acerca.php" class="acerca">Acerca de</a>
            <div class="dropdown">
                <a href="#" class="dropbtn">Editar</a>
                <div class="dropdown-content">
                    <a href="altaa.php">Agregar</a>
                    <a href="modii.php">Modificar</a>
                    <a href="elimm.php">Eliminar</a>                    
                </div>
            </div>
            
            <a href="#" onclick="confirmLogout()" class="logout">Salir</a>
           
        </nav>   