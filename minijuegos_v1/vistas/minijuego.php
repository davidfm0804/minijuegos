<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Minijuego</title>
</head>
<body>
    <h1>Detalles del Minijuego</h1>
    <div class="contenedor-minijuego">
        <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            require_once('../controladores/Cminijuego.php');
            $objminijuego = new Cminijuego();
            $resultado = $objminijuego->cMostrarMinijuego($id);
            while ($fila = $resultado->fetch_assoc()) {
                $nombreM = $fila['mnombre'];
                $url = $fila['urljuego'];
                echo "<h2 class='nombre-minijuego'>$nombreM</h2>";
                echo "<h3 class='nombre-minijuego'>$url</h3>";
            }
        } else {
            echo "<p>No se recibieron datos</p>";
        }
        ?>
    </div>
</body>
</html>
