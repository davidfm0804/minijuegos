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
            
            $ambitos = implode(",", $_POST['ambitos']);
            $resultado = $objminijuego->cMostrarMinijuegoAmbito($ambitos);
            $nombresAmbitos = [];

            while ($fila = $resultado->fetch_assoc()) {
                $nombreA = $fila['anombre'];
                echo "<tr>";
                if (!in_array($nombreA, $nombresAmbitos)) {
                    $nombresAmbitos[] = $nombreA;
                    echo "<th>$nombreA</th>";
                }
                echo "</tr>";
                echo "<tr>";
                $id = $fila['id'];
                $nombreM = $fila['mnombre'];
                $urljuego = $fila['urljuego'];
                
                echo "<td><a href='minijuego.php?id=$id'>$nombreM</a></td> ";
                echo "</tr>";
            }
        } else {
            echo "<p>No se han seleccionado ámbitos</p>";
        }
        ?>
    </table>
</body>
</html>
