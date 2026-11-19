<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seleccionar clase</title>
</head>
<body>
<?php
echo "<h2>Selecciona una clase</h2>";

if (!empty($mensaje)) {
    echo "<p>" . $mensaje . "</p>";
} else {
    echo "<form action='../procesos/listar_asignaturasClase.php' method='post'>";
    echo "<label for='idClases'>Clase:</label> ";
    echo "<select name='idClases' id='idClases' required>";
    echo "<option value=''>-- Selecciona --</option>";

    foreach ($datos as $clase) {
        echo "<option value='" . (int)$clase['idClases'] . "'>" . $clase['nombre'] . "</option>";
    }

    echo "</select> ";
    echo "<button type='submit'>Ver asignaturas</button>";
    echo "</form>";
}
?>
</body>
</html>