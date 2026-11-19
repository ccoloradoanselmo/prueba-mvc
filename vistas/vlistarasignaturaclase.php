<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asignaturas de la clase</title>
</head>
<body>
<?php
echo "<h2>Asignaturas de la clase</h2>";

echo "<form action='asignaturasPorClase.php' method='post'>";
echo "<label for='idClases'>ID de la clase:</label> ";
echo "<input type='number' name='idClases' id='idClases' min='1' value='" . ($idClases > 0 ? (int)$idClases : "") . "' required readonly> ";
echo "</form>";

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