<?php
    // Mapeo de nombres de imagen según C_NAME
    $imageMapping = array(
        "Sesc (Hero)" => "Trip Hero.png",
        "Tour House (Hero)" => "Trip Hero.png",
        "Sinergy (Hero)" => "Trip Hero.png",
        "Travel Safe (Hero)" => "Trip Hero.png",
        "INTERCARE (HERO)" => "Trip Hero.png",
        "Ciclic (HERO)" => "Trip Hero.png",
        "123 Assist Seguro Viagem (HERO)" => "Trip Hero.png",
        "BTG (HERO)" => "Trip Hero.png",
        "Globus Digital (HERO)" => "Trip Hero.png",
        "Travel Seguros (Hero)" => "Trip Hero.png",
        "Hero Seguros (HERO)" => "Trip Hero.png",
        "Prevent Seguro (Hero)" => "Trip Hero.png",
        "ON TIME (HERO)" => "Trip Hero.png",
        "VoeTur (HERO)" => "Trip Hero.png",
        "PRIME TRAVEL (HERO)" => "Trip Hero.png",
        "MY TRAVEL ASSIST (HERO)" => "Trip Hero.png",
        "TOTAL ASSIST (HERO)" => "Trip Hero.png",
        "TRIP HERO" => "Trip Hero.png",
        "AMSTAR (Chubb MEX)" => "Chubb travel.png",
        "AZUL tripulação - BTA (Chubb BRA)" => "Chubb travel.png",
        "BLU ASSISTANCE - TEC MONTERREY (Chubb MEX)" => "Chubb travel.png",
        "Nas Seguro (Chubb)" => "Chubb travel.png",
        "PETROBRAS (Chubb BRA)" => "Chubb travel.png",
        "BTA (Chubb BRA)" => "Chubb travel.png",
        "Azul (Chubb BRA)" => "Chubb travel.png",
        "MUVIT (Chubb GUA)" => "Chubb travel.png",
        "DAYCOVAL (Chubb BRA)" => "Chubb travel.png",
        "WORLD NOMADS (Chubb BRA)" => "Chubb travel.png",
        "Chubb Puerto Rico (Chubb PR)" => "Chubb travel.png",
        "Chubb Copa (Chubb PAN)" => "Chubb travel.png",
        "NOVO ASSIST (Chubb BRA)" => "Chubb travel.png",
        "INTERMAC BRAZIL (Chubb BRA)" => "Chubb travel.png",
        "Enlaza Conmigo" => "enlaza.jpg"
    );
?>

<!DOCTYPE html>
<html>
<head>
    <link rel = "icon" href = "WMMS.png">
    <link rel="stylesheet" href="styles/styles.css">
    <?php
        $host = "localhost";
        $user = "id21154007_embrace";
        $pass = "Embrace2023!";
        $db = "id21154007_formularioencuesta";
    
        $conexion = mysqli_connect($host, $user, $pass, $db);
        $ticket_id = $_GET['ticket'];
        // Obtener el valor de C_NAME desde la base de datos (ya tienes este código)
        $selectQuery = "SELECT C_NAME FROM pax_encuestas WHERE TKT = '$ticket_id'";
        $result = mysqli_query($conexion, $selectQuery);
        
        $styleMapping = array(
    "Sesc (Hero)" => "hero.css",
    "Tour House (Hero)" => "hero.css",
    "Sinergy (Hero)" => "hero.css",
    "Travel Safe (Hero)" => "hero.css",
    "INTERCARE (HERO)" => "hero.css",
    "Ciclic (HERO)" => "hero.css",
    "123 Assist Seguro Viagem (HERO)" => "hero.css",
    "BTG (HERO)" => "hero.css",
    "Globus Digital (HERO)" => "hero.css",
    "Travel Seguros (Hero)" => "hero.css",
    "Hero Seguros (HERO)" => "hero.css",
    "Prevent Seguro (Hero)" => "hero.css",
    "ON TIME (HERO)" => "hero.css",
    "VoeTur (HERO)" => "hero.css",
    "PRIME TRAVEL (HERO)" => "hero.css",
    "MY TRAVEL ASSIST (HERO)" => "hero.css",
    "TOTAL ASSIST (HERO)" => "hero.css",
    "TRIP HERO" => "hero.css",
    "AMSTAR (Chubb MEX)" => "chubb.css",
    "AZUL tripulação - BTA (Chubb BRA)" => "chubb.css",
    "BLU ASSISTANCE - TEC MONTERREY (Chubb MEX)" => "chubb.css",
    "Nas Seguro (Chubb)" => "chubb.css",
    "PETROBRAS (Chubb BRA)" => "chubb.css",
    "BTA (Chubb BRA)" => "chubb.css",
    "Azul (Chubb BRA)" => "chubb.css",
    "MUVIT (Chubb GUA)" => "chubb.css",
    "DAYCOVAL (Chubb BRA)" => "chubb.css",
    "WORLD NOMADS (Chubb BRA)" => "chubb.css",
    "Chubb Puerto Rico (Chubb PR)" => "chubb.css",
    "Chubb Copa (Chubb PAN)" => "chubb.css",
    "NOVO ASSIST (Chubb BRA)" => "chubb.css",
    "INTERMAC BRAZIL (Chubb BRA)" => "chubb.css",
    "Enlaza Conmigo" => "enlaza.css"
        );

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $c_name = $row['C_NAME'];

        $stylesheet = "styles/" . strtolower(str_replace(" ", "_", $c_name)) . ".css";

        // Verificar si el valor de $c_name está en el mapa
        if (array_key_exists($c_name, $styleMapping)) {
            $stylesheet = "styles/" . $styleMapping[$c_name];
        }

        echo "<link rel=\"stylesheet\" href=\"$stylesheet\">";
        }
    ?>
    <title>Encuesta de satisfacción</title>
</head>
<body>
<header>
    <?php
        $host = "localhost";
        $user = "id21154007_embrace";
        $pass = "Embrace2023!";
        $db = "id21154007_formularioencuesta";
    
        $conexion = mysqli_connect($host, $user, $pass, $db);
    
        if (!$conexion) {
            die("Error de conexión: " . mysqli_connect_error());
        }
    
        $ticket_id = $_GET['ticket'];
        $selectQuery = "SELECT C_NAME FROM pax_encuestas WHERE TKT = '$ticket_id'";
    
        $result = mysqli_query($conexion, $selectQuery);
    
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $c_name = $row['C_NAME'];
        } else {
            $c_name = "Valor no encontrado"; // Puedes manejar esto según tu necesidad
        }
    
        mysqli_close($conexion);
        //Mapeo del nombre con el array creado antes
        if (array_key_exists($c_name, $imageMapping)) {
            $imageFileName = $imageMapping[$c_name];
            echo "<img src=\"images/$imageFileName\" alt=\"\" class=\"imgHeader\">";
        } else {
            echo "Imagen no encontrada para este valor de C_NAME.";
        }
    ?>
</header>

    <?php
        if (isset($_GET['ticket'])) {
            $ticket = $_GET['ticket'];
            echo "<h1 style = 'display:none;'>Ticket número: $ticket</h1>";
        } else {
            echo "<p>No se proporcionó un número de ticket válido.</p>";
        }
    ?>
    <section class = "seccionFormulario">
        <div class = "topFormulario">
            <p class="encuesta">Encuesta de satisfacción</p>
            <p class="intro">Estimado, mediante el siguiente formulario le solicitamos que nos responda algunas preguntas para saber su nivel de satisfacción con nuestra atención y ver en que aspectos mejorar para futuras atenciones.</p>
        </div>
        <form id="encuestaForm" action="agradecimiento.php" method="post">
            <p class="pregunta">¿Cuál es su grado de satisfacción con la atención recibida con nuestra central de operaciones?</p>
            <label>
                <input type="radio" name="satisfaccionCentral" value="1" required> 1
            </label>
            <label>
                <input type="radio" name="satisfaccionCentral" value="2" required> 2
            </label>
            <label>
                <input type="radio" name="satisfaccionCentral" value="3" required> 3
            </label>
            <label>
                <input type="radio" name="satisfaccionCentral" value="4" required> 4
            </label>
            <label>
                <input type="radio" name="satisfaccionCentral" value="5" required> 5
            </label>
            <p class="pregunta">¿Cuál es su grado de satisfacción con la atención recibida por parte de nuestro proveedor?</p>
            <label>
                <input type="radio" name="satisfaccionProveedor" value="1" required> 1
            </label>
            <label>
                <input type="radio" name="satisfaccionProveedor" value="2" required> 2
            </label>
            <label>
                <input type="radio" name="satisfaccionProveedor" value="3" required> 3
            </label>
            <label>
                <input type="radio" name="satisfaccionProveedor" value="4" required> 4
            </label>
            <label>
                <input type="radio" name="satisfaccionProveedor" value="5" required> 5
            </label>
            <p class="pregunta">¿Recomendaría nuestro servicio?</p>
            <label>
                <input type="radio" name="recomendarServicio" value="si" required> Sí
            </label>
            <label>
                <input type="radio" name="recomendarServicio" value="no" required> No
            </label>
            <br>
            <br>
            <input type="submit" id="enviarEncuesta" name="enviarEncuesta" value="Enviar Encuesta">
            <input type="hidden" name="ticket" value="<?php echo htmlspecialchars($_GET['ticket']); ?>">
        </form>
    </section>
</body>
</html>