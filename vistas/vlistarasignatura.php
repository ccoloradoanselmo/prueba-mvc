<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asignaturas</title>
</head>
<body>
<?php
echo "<h2>Asignaturas</h2>";

if (!empty($mensaje)) {
    echo "<p>" . $mensaje . "</p>";
} else {
    echo "<table border='1' cellpadding='6'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($datos as $asignatura) {
        echo "<tr>";
        echo "<td>" . (int)$asignatura['idAsignatura'] . "</td>";
        echo "<td>" . $asignatura['nombre'] . "</td>";
        echo "</tr>";
    }   

    echo "</tbody>";
    echo "</table>";
}
?>
</body>
</html>