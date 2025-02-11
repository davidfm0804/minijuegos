<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Listar Minijuegos</title>
</head>
<body>
    <h1>Lista de Minijuegos</h1>
    <table>
    <?php
    if (isset($_POST['ambitos'])) {
        require_once('../controladores/Cminijuego.php');
        $objminijuego = new Cminijuego();
           
            $ambitos = implode(",", $_POST['ambitos']);
            $nombresAmbitos=[];
            $resultado=$objminijuego->cMostrarMinijuego($ambitos);
            
        while ($fila = $resultado->fetch_assoc()) {
            $nombreA = $fila['anombre'];
            echo "<tr>";
            if (!in_array($nombreA, $nombresAmbitos)) {//Esto pregunta si no esta dentro del array, sino entonces lo mete
                $nombresAmbitos[] = $nombreA;
                echo "<th>$nombreA</th>";
            }
            echo "</tr>";
            echo "<tr>";
            $nombreM=$fila['mnombre'];
            $urljuego = $fila['urljuego']; 
            echo "<td><a href='$urljuego'>$nombreM</a></td>";
            echo "</tr>";
        }
    }else{
    echo '<p>No se han seleccionado ambitos</p>';
    }
    ?>
    </table>
</body>
</html>

        