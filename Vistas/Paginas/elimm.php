<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrocom</title>
    <link rel="stylesheet" href="../Estilos/eliminar.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header>
        
    </header>
    <main>
        <div class="volver">
            <a href="inicio.php" class="atras">Atras</a>
        </div>
        <div class="iniciose2">
        <form action="" method="post" class="forms">
            <?php
                include "../../Controlador/conexion.php";
                include "../../Modelo/Models/elim.php";
            ?>
                
            <div class="eliminacion">
                <h2 class="contact">Eliminar</h2>
    
                <div class="sector">
                    <div class="in">
                    <input type="number" class="form-control" name="codigo" id="" placeholder="Ingrese Código">
                    </div>
    
                </div>
    
                <input type="submit" name="eliminar" id="" class="btn1" value="Eliminar">
    
            </div>
        </form>
    
    </main>
   
</body>
</html>