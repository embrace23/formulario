<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtén los valores del formulario
    $ticket = $_POST['ticket'];
    $satisfaccionCentral = $_POST['satisfaccionCentral'];
    $satisfaccionProveedor = $_POST['satisfaccionProveedor'];
    $recomendarServicio = $_POST['recomendarServicio'];

    // Incluye el archivo de conexión a la base de datos
    require 'conexion.php';
    $conexion = Conexion();

    // Prepara la consulta SQL para insertar los datos en la tabla respuestas_formulario
    $insertQuery = "INSERT INTO respuestas_formulario (TKT, SAS_CENTRAL, SAS_PROV, RECOM) VALUES ($ticket,'$satisfaccionCentral', '$satisfaccionProveedor', '$recomendarServicio')";

    // Ejecuta la consulta
    if (mysqli_query($conexion, $insertQuery)) {
        echo "Datos guardados correctamente en la base de datos.";
    } else {
        echo "Error al guardar los datos en la base de datos: " . mysqli_error($conexion);
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conexion);
}
?>