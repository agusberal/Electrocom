<?php 
     if(!empty($_POST["registrarr"])){
        if(empty($_POST["usuario"]) or empty($_POST["contraseña"]) or empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["dni"])  or empty($_POST["edad"])) { 
          
            echo '<script class=pro>
            Swal.fire({
                title: "Incompleto!",
                text: "Debe Rellenar los Campos para Continuar!",
                icon: "info"
              });
            </script>';
        }
        else{
            $cod=$_POST["usuario"];
            $nom=$_POST["contraseña"];
            $des=$_POST["nombre"];
            $pre=$_POST["apellido"];
            $pree=$_POST["dni"];
            $prer=$_POST["edad"];
            
            $sql=$ruta->query("insert into login (usuario,contraseña,nombre,apellido,dni, edad) values ('$cod','$nom','$des','$pre','$pree','$prer')");
            if($sql==1){
                echo '<div class="pro"><script>
                Swal.fire({
                    title: "Producto Registrado!",
                    text: "Se Guardo en la Tabla Productos!",
                    icon: "success"
                  });
                </script></div>';
            }
            else{
                echo '<script>
                Swal.fire({
                    title: "Upss!",
                    text: "No se Guardo el Producto!",
                    icon: "error"
                  });
                </script>';
            }
        }
    }

?>