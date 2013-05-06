<?php 
        
        include 'backend/query-cuatro.php';

?>
<!DOCTYPE html>
<html>
        <head>
                <title>Sistema de Inspecciones</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
                <script type="text/javascript" src="js/kickstart.js"></script>
                <link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
                <link rel="stylesheet" type="text/css" href="style.css" media="all" />  
        </head>
        <body>
                <header>
                        <nav>
                                <ul class="menu">
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a>Personal</a>
                                                <ul>
                                                        <li><a href="cargapersonal.php">Cargar</a></li>
                                                        <li><a href="modificapersonal.php">Modificar/Eliminar</a></li>
                                                </ul>
                                        </li>
                                        <li><a>Inspecciones</a>
                                                <ul>
                                                        <li><a href="cargainspeccion.php">Cargar</a></li>
                                                        <li><a href="modificainspeccion.php">Modificar/Eliminar</a></li>
                                                </ul>
                                        </li>
                                        <li><a>Reportes</a>
                                                <ul>
                                                        <li><a href="reportefecha.php">Por Fecha</a></li>
                                                        <li><a href="reporteempresa.php">Por Empresa</a></li>
                                                        <li><a href="reportepersonal.php">Por Personal</a></li>
                                                        <li><a href="reportepersonal2.php">Personal/Fecha</a></li>
                                                </ul>
                                        </li>
                                </ul>
                        </nav>
                </header>
                <div id="main">
                        <div class="col_12" id="cpersonal">
                                <h3>Modificar Inspecciones</h3>
                                <form method="post" action="backend/modificarinspeccion.php">
                                        <?php foreach($contents as $content): ?>
                                        <label for="empresa">Empresa</label>
                                        <input type="text" name="empresa" id="empresa" value="<?php echo $content['empresa']; ?>">
                                        <label for="fecha">Fecha</label>
                                        <input type="date" name="fecha" id="fecha" value="<?php echo $content['fecha']; ?>"><br><br>
                                        <label for="telefono">Telefono</label>
                                        <input type="text" name="telefono" id="telefono" value="<?php echo $content['telefono']; ?>">
                                        <label for="region">Region</label>
                                        <input type="text" name="region" id="region" value="<?php echo $content['region']; ?>"><br><br>
                                        <label for="direccion">Direccion</label><br>
                                        <textarea name="direccion" id="direccion" cols="55">
                                                <?php echo $content['direccion']; ?>
                                        </textarea><br><br>
                                        <label for="ut">U.T.</label>
                                        <input type="text" name="ut" id="ut" value="<?php echo $content['unidadest']; ?>">
                                        <label for="vehiculo">Vehiculos</label>
                                        <input type="text" name="vehiculo" id="vehiculo" value="<?php echo $content['vehiculo']; ?>">
                                        <label for="habitabilidad">Habitabilidad</label>
                                        <input type="text" name="habitabilidad" id="habitabilidad" value="<?php echo $content['habitabilidad']; ?>"><br><br>
                                        
                                        <input type="hidden" value="<?php echo $content['id']; ?>" name="id">
                                        <input type="submit" class="green" value="Modificar">
                                        <input type="reset" class="orange" value="Cancelar">
                                        <?php endforeach; ?>
                                </form>
                        </div>
                </div>
        </body>
</html>