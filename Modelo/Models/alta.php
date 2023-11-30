<?php
   
    if(!empty($_POST["registrarr"])){
        if(empty($_POST["codigo"]) or empty($_POST["nombre"]) or empty($_POST["descripcion"]) or empty($_POST["precio"])) { 
          
            echo '<script class=pro>
            Swal.fire({
                title: "Incompleto!",
                text: "Debe Rellenar los Campos para Continuar!",
                icon: "info"
              });
            </script>';
        }
        else{
            $cod=$_POST["codigo"];
            $nom=$_POST["nombre"];
            $des=$_POST["descripcion"];
            $pre=$_POST["precio"];
            $sql=$ruta->query("insert into productos (cod_pro,nombre,descripcion,precio) values ('$cod','$nom','$des','$pre')");
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