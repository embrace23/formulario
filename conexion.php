<?php
function Conexion()
{
    $host = "db5014442073.hosting-data.io";
    $user = "dbu1522174";
    $pass = "Embrace2023!";
    $db = "dbs12009232";

    $conexion = mysqli_connect($host, $user, $pass, $db);

    if ($conexion) {
        $query = "SELECT * FROM pax_encuestas";
        $result = mysqli_query($conexion, $query);

        if ($result){
            while ($row = mysqli_fetch_assoc($result)){
                $ticket_id = $row["TKT"];
                $url = "http://worldmedicalcare.com/encuesta/muestra_ticket.php?ticket=$ticket_id";

                $updateQuery = "UPDATE formulario_prueba SET URL = '$url' WHERE TKT = '$ticket_id'";
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