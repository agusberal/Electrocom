</header>
<main>    
    <div class="container">
        <div class="buscador">
            <form method="GET" action="">
                <label for="filtro"></label>
                <input class="buscar" type="text" id="filtro" name="filtro" placeholder="Buscar producto">
                <button type="submit" class="buscarr">Buscar</button>
            </form>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
                foreach ($resultado as $row) {
                    $nombre_filtro = isset($_GET['filtro']) ? strtolower($_GET['filtro']) : '';
                    // Verificar si se ha ingresado un rango de precios
                    $precio_filtro = explode("-", $nombre_filtro);
                    $precio_min = isset($precio_filtro[0]) ? floatval($precio_filtro[0]) : PHP_INT_MIN;
                    $precio_max = isset($precio_filtro[1]) ? floatval($precio_filtro[1]) : PHP_INT_MAX;
                    // Obtener valores del producto
                    $nombre = strtolower($row['nombre']);
                    $precio = floatval($row['precio']);
                    // Aplicar los filtros
                    if (
                        (empty($nombre_filtro) || strpos($nombre, $nombre_filtro) !== false)
                        && ($precio >= $precio_min && $precio <= $precio_max)
                    ) {
                        ?>  
                        <div class="col">
                            <div class="card shadow-sm">
                       
                                    <?php
                                    $id = $row['cod_pro'];
                                    $imag = "../Media/produ/" . $id . "/principal.jpg";
                                    if (!file_exists($imag)) {
                                        $imag = "../Media/no-img.png";
                                    }
                                    ?>
                         
                              
                                    <?php
                                    $id = $row['cod_pro'];
                                    $imag = "../Media/produ/" . $id . "/principal.jpg";
                                    if (!file_exists($imag)) {
                                        $imag = "../Media/no-img.png";
                                    }
                                    ?>
                                    <img src="<?php echo $imag; ?>">
                                    <div class="card-body">
                                        <h5 class="card-text"><?php echo $row['nombre']; ?></h5>
                                        <p class="card-text">$<?php echo number_format($row['precio'], 2, '.', ','); ?></p>
                                  
                                </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
        </div>
    </div>
            <!-- <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach($resultado as $row) { ?>
                    <div class="col">
                        <div class="card shadow-sm">
                        <?php 
                            $id = $row['cod_pro'];
                            $imag = "../Media/produ/".$id."/principal.jpg";
                            if(!file_exists($imag)){
                                $imag = "../Media/no-img.png";
                            }
                        ?>
                            <img src="<?php echo $imag; ?>">
                            <div class="card-body">
                            <h5 class="card-text"><?php echo $row['nombre'];?></h5>
                            <p class="card-text">$<?php echo number_format($row['precio'], 2,'.',',');?></p>  
                        </div>
                    </div>
                    <?php } ?>