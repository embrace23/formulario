<?php
function Conexion()
{
    $host = "localhost";
    $user = "id21154007_embrace";
    $pass = "Embrace2023!";
    $db = "id21154007_formularioencuesta";

    $conexion = mysqli_connect($host, $user, $pass, $db);

    if ($conexion) {
        $query = "SELECT * FROM formulario_prueba";
        $result = mysqli_query($conexion, $query);

        if ($result){
            while ($row = mysqli_fetch_assoc($result)){
                $ticket_id = $row["TKT"];
                $url = "https://formularioembrace23.000webhostapp.com/muestra_ticket.php?ticket=$ticket_id";

                $updateQuery = "UPDATE formulario_prueba SET URL = '$url' WHERE TKT = '$ticket_id'";
                mysqli_query($conexion, $updateQuery);
                echo "<h3>Acceda a un link personal para realizar la encuesta, muchas gracias.</h3>";
                echo "<h3>$ticket_id</h3>";
                echo "<a href=\"$url\">Encuesta a $ticket_id</a><br>";
            }

            mysqli_free_result($result);
        }
    } else {
        echo "No se pudo establecer la conexión a la base de datos";
    }

    return $conexion;
}
?>