<?php
    if(!empty($_POST["ingresar"])){
        if(!empty($_POST["usuario"]) and !empty($_POST["contraseña"])){
            $user=$_POST["usuario"];
            $clave=$_POST["contraseña"];
            $sql=$ruta->query("select * from login where usuario='$user' and contraseña='$clave'");
            if($verificamos= $sql->fetch_object()){
                header("Location:Vistas/Paginas/inicio.php");
            }
            else{
                echo '<script>
                Swal.fire({
                    title: "Upss!",
                    text: "Parece que no Tiene Cuenta!",
                    icon: "info"
                  });
                </script>';
            }
        }
        else{
           
            echo '<script>
            Swal.fire({
                title: "Incompleto!",
                text: "Debe ingresar Usuario y/o Contraseña!",
                icon: "info"
              });
            </script>';
        }

    }
?>