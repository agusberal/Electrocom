<?php
    if(!empty($_POST["eliminar"])){
        if(empty($_POST["codigo"])) { 
          
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
            $sql=$ruta->query("delete from productos where cod_pro='$cod'");
            if($sql==1){
                echo '<script>
                Swal.fire({
                    title: "Producto Eliminado!",
                    text: "Se Elimino el Producto!",
                    icon: "success"
                  });
                </script>';
            }
            else{
                echo  '<script>
                Swal.fire({
                    title: "Upss!",
                    text: "No se Elimino el Producto!",
                    icon: "error"
                  });
                </script>';
            }
        }
    }
?>