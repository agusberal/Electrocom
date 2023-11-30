<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrocom</title>
    <link rel="stylesheet" href="Vistas/Estilos/login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
   
    <main>
      
        <div>   
            <div class="iniciose">
                <form action="" method="post" >
                    <?php
                        include("Controlador/conexion.php");
                        include("Modelo/Models/login.php");
                    ?>
                    <div class="login">
                        <h2 class="contact">Login</h2>
                        
                        <input type="text" name="usuario" id="" class="input" placeholder="Usuario">
                        
                        
                        <input type="password" name="contraseña" id="" class="input" placeholder="Contraseña">
                        
                    
                        <input type="submit" value="Ingresar" name="ingresar" class="btn1">
                        
                        <h5>¿No tienes Cuenta?<a href="Vistas/Paginas/regisA.php">
                            ¡Registrate!</a></h5>
                    
                    </div>      
                </form>
            </div>
        </div>
    </main>

</body>
</html>
