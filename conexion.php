<?php
function Conexion()
{
    $host = "localhost";
    $user = "id21149302_clientesembrace";
    $pass = "Embrace2023!";
    $db = "id21149302_clientes";

    $conexion = mysqli_connect($host, $user, $pass, $db);

    if ($conexion) {
        $query = "SELECT * FROM clientesEncuesta";
        $result = mysqli_query($conexion, $query);

        if ($result){
            while ($row = mysqli_fetch_assoc($result)){
                $ticket_id = $row["TICKET_ID"];
                $url = "https://formularioembrace.000webhostapp.com/muestra_ticket.php?ticket=$ticket_id";

                $updateQuery = "UPDATE clientesEncuesta SET URL = '$url' WHERE TICKET_ID = '$ticket_id'";
                mysqli_query($conexion, $updateQuery);
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