<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrocom</title>
    <link rel="stylesheet" href="../Estilos/alta.css"> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header>
        
    </header>
    <main>
        <div class="volver">
            <a href="inicio.php" class="atras">Atras</a>
        </div>
        <div class="iniciose1">
            <form action="" method="post" class="forms">
                <?php
                include "../../Controlador/conexion.php";
                include "../../Modelo/Models/alta.php";
                ?>
            
                <div class="registro">
                    <h2 class="contact">Registro</h2>

                    <div class="sector">
                        <div class="in">
                            <input type="number" class="form-control" name="codigo" id="" placeholder="Ingrese Código">
                        </div>
                            <div class="in">
                             <input type="text" class="form-control" name="nombre" id="" placeholder="Ingrese Nombre">
                        </div>
                    
                        <div class="in">
                            <input type="text" class="form-control" name="descripcion" id="" placeholder="Ingrese Descripcion">
                        </div>
                        <div class="in">
                            <input type="number" class="form-control" name="precio" id="" placeholder="Ingrese Precio">
                        </div>
                    </div>    
                    <input type="submit" value="Registrar" name="registrarr" class="btn1">
                           
                </div>
                
            </form>
        </div>
    </main>
      
   
</body>
</html>