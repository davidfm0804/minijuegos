<?php
  require_once('../controladores/Cambito.php');
  $objCambito = new Cambito();
  $resultado = $objCambito->cMostrarAmbitos();   
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Ámbitos</title>
</head>
<body>
    <h1>Elige Ámbitos</h1>
    <div>
    <form method="POST" action="listarMinijuegos.php">
        <?php
            while ($fila = $resultado->fetch_assoc()) {
                $nombre = $fila['nombre'];
                $idAmbito = $fila['idAmbito'];
                echo "<label>
                        <input type='checkbox' name='ambitos[]' value='$idAmbito'>
                        $nombre
                      </label><br>";
            }
        ?>
        <input type="submit" value="Enviar">
    </form>
    </div>
</body>
</html>

