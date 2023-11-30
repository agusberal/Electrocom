<?php
    if(!empty($_POST["modificar"])){
        if(empty($_POST["codigo"]) or empty($_POST["nombre"]) or empty($_POST["descripcion"]) or empty($_POST["precio"])) { 
          
            echo '<script>
            Swal.fire({
                title: "Incompleto!",
                text: "Debe Rellenar el Campo para Continuar!",
                icon: "info"
              });
            </script>';
        }
        else{
            $cod=$_POST["codigo"];
            $nom=$_POST["nombre"];
            $des=$_POST["descripcion"];
            $pre=$_POST["precio"];
            $sql=$ruta->query("update productos set nombre='$nom', descripcion='$des', precio='$pre' where cod_pro='$cod'");
            if($sql==1){
                echo '<script>
                    Swal.fire({
                        title: "Producto Actualizado!",
                        text: "Se Guardo en la Tabla Productos!",
                        icon: "success"
                    });
                </script>';
            }
            else{
                echo "No se ha Modificado";
            }
        }
        
        
    }
?>