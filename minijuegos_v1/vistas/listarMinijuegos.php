<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Lista de Minijuegos</title>
</head>
<body>
    <h1>Lista de Minijuegos</h1>
    <table>
        <?php
        if (isset($_POST['ambitos'])) {
            require_once('../controladores/Cminijuego.php');
            $objminijuego = new Cminijuego();

            foreach ($_POST['ambitos'] as $ambito){
                $resultado = $objminijuego->cMostrarMinijuegoAmbito($ambito);
                $sw = 0;
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    if ($sw == 0) {
                        $nombreA = $fila['anombre'];
                        echo "<th>$nombreA:</th>";
                        $sw = 1;
                    }
                    echo "</tr>";
                    echo "<tr>";
                    $id = $fila['id'];
                    $nombreM = $fila['mnombre'];
                    echo "<td><a class='minijuego' href='minijuego.php?id=$id'>$nombreM</a></td> ";
                    echo "</tr>";
                }
                echo "<br>";
            }
        } else {
            echo '<p>No se han seleccionado ámbitos</p>';
        }
        ?>
    </table>
</body>
</html>
