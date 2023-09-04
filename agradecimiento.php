<!DOCTYPE html>
<html>
<head>
    <title>Agradecimiento</title>
    <link rel = "icon" href = "WMMS.png">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <div class = "seccionAgradecimiento">
        <h1>¡Gracias por completar la encuesta!</h1>
        <p>Agradecemos mucho que hayas tomado el tiempo para responder a nuestras preguntas.</p>
    </div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtén los valores del formulario
    $ticket = $_POST['ticket'];
    $satisfaccionCentral = $_POST['satisfaccionCentral'];
    $satisfaccionProveedor = $_POST['satisfaccionProveedor'];
    $recomendarServicio = $_POST['recomendarServicio'];

    // Incluye el archivo de conexión a la base de datos
    $host = "localhost";
    $user = "id21154007_embrace";
    $pass = "Embrace2023!";
    $db = "id21154007_formularioencuesta";

    $conexion = mysqli_connect($host, $user, $pass, $db);

    // Prepara la consulta SQL para insertar los datos en la tabla respuestas_formulario
    $insertQuery = "INSERT INTO respuestas_formulario (TKT, SAS_CENTRAL, SAS_PROV, RECOM) VALUES ($ticket,'$satisfaccionCentral', '$satisfaccionProveedor', '$recomendarServicio')";

    // Ejecuta la consulta
    if (mysqli_query($conexion, $insertQuery)) {
        echo "<script>console.log('Datos guardados correctamente en la base de datos.');</script>";
    } else {
        echo "Error al guardar los datos en la base de datos: " . mysqli_error($conexion);
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conexion);
}
?>