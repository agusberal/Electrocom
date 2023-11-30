<?php
   if (isset($_GET['agregar'])) {
    $busqueda = $_GET['codigo'];
    $sql = $ruta->query("SELECT * FROM productos WHERE cod_pro LIKE '$busqueda'");
    while ($row = $sql->fetch_array()) {
        $productInfo = json_encode(array(
            'cod_pro' => $row['cod_pro'],
            'nombre' => $row['nombre'],
            'precio' => $row['precio']
        ));
        echo "<script>agregarProducto($productInfo);</script>";
    }
}



    if(isset($_GET['agregar'])){
        $busqueda = $_GET['codigo'];
        $sql = $ruta->query("SELECT * FROM productos WHERE cod_pro LIKE '$busqueda'");
        while ($row = $sql->fetch_array()){
    
            echo '<div class="pro">' . $row ['cod_pro'].' - '.$row['nombre'].' - $'.$row['precio'].'</div><br>';
        } 
    }
?>