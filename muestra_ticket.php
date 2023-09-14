<?php
    // Mapeo de nombres de imagen según C_NAME
    $imageMapping = array(
        "Sesc (Hero)" => "Trip-Hero.jpg",
        "Tour House (Hero)" => "Trip-Hero.jpg",
        "Sinergy (Hero)" => "Trip-Hero.jpg",
        "Travel Safe (Hero)" => "Trip-Hero.jpg",
        "INTERCARE (HERO)" => "Trip-Hero.jpg",
        "Ciclic (HERO)" => "Trip-Hero.jpg",
        "123 Assist Seguro Viagem (HERO)" => "Trip-Hero.jpg",
        "BTG (HERO)" => "Trip-Hero.jpg",
        "Globus Digital (HERO)" => "Trip-Hero.jpg",
        "Travel Seguros (Hero)" => "Trip-Hero.jpg",
        "Hero Seguros (HERO)" => "Trip-Hero.jpg",
        "Prevent Seguro (Hero)" => "Trip-Hero.jpg",
        "ON TIME (HERO)" => "Trip-Hero.jpg",
        "VoeTur (HERO)" => "Trip-Hero.jpg",
        "PRIME TRAVEL (HERO)" => "Trip-Hero.jpg",
        "MY TRAVEL ASSIST (HERO)" => "Trip-Hero.jpg",
        "TOTAL ASSIST (HERO)" => "Trip-Hero.jpg",
        "TRIP HERO" => "Trip-Hero.jpg",
        "AMSTAR (Chubb MEX)" => "Chubb.jpg",
        "AZUL tripulação - BTA (Chubb BRA)" => "Chubb.jpg",
        "BLU ASSISTANCE - TEC MONTERREY (Chubb MEX)" => "Chubb.jpg",
        "Nas Seguro (Chubb)" => "Chubb.jpg",
        "PETROBRAS (Chubb BRA)" => "Chubb.jpg",
        "BTA (Chubb BRA)" => "Chubb.jpg",
        "Azul (Chubb BRA)" => "Chubb.jpg",
        "MUVIT (Chubb GUA)" => "Chubb.jpg",
        "DAYCOVAL (Chubb BRA)" => "Chubb.jpg",
        "WORLD NOMADS (Chubb BRA)" => "Chubb.jpg",
        "Chubb Puerto Rico (Chubb PR)" => "Chubb.jpg",
        "Chubb Copa (Chubb PAN)" => "Chubb.jpg",
        "NOVO ASSIST (Chubb BRA)" => "Chubb.jpg",
        "INTERMAC BRAZIL (Chubb BRA)" => "Chubb.jpg",
        "Enlaza Conmigo" => "enlaza.jpg"
    );
    
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
?>

<!DOCTYPE html>
<html>
<head>
    <link rel = "icon" href = "images/WMMS.png">
    <link rel="stylesheet" href="styles/styles.css">
  	<meta charset="UTF-8">
    <?php
        $host = "db5014442073.hosting-data.io";
        $user = "dbu1522174";
        $pass = "Embrace2023!";
        $db = "dbs12009232";
    
        $conexion = mysqli_connect($host, $user, $pass, $db);
        $ticket_id = $_GET['ticket'];

        $selectQuery = "SELECT C_NAME FROM pax_encuestas WHERE TKT = '$ticket_id'";
        $result = mysqli_query($conexion, $selectQuery);

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
    <title>Encuesta</title>
</head>
<body>
<header>
    <?php
        //$host = "db5014442073.hosting-data.io";
        //$user = "dbu1522174";
        //$pass = "Embrace2023!";
        //$db = "dbs12009232";
    
       //$conexion = mysqli_connect($host, $user, $pass, $db);
    
        //if (!$conexion) {
            //die("Error de conexión: " . mysqli_connect_error());
        //}
    
        $ticket_id = $_GET['ticket'];
        $selectQuery = "SELECT C_NAME FROM pax_encuestas WHERE TKT = '$ticket_id'";
    
        $result = mysqli_query($conexion, $selectQuery);
    
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $c_name = $row['C_NAME'];
        } else {
            $c_name = "Valor no encontrado";
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
        
        $idioma = "pt";

        if (isset($_GET['idioma'])) {
            $idioma = $_GET['idioma'];
        }
    
        $traducciones = array(
        "es" => array(
            "selecIdioma" => "Idioma:",
            "espanol" => "Español",
            "ingles" => "English",
            "portugues" => "Português",
            "cambiarIdioma" => "Cambiar",
            "titulo" => "Encuesta de satisfacción",
            "intro" => "Estimado, mediante el siguiente formulario le solicitamos que nos responda algunas preguntas para saber su nivel de satisfacción con nuestra atención y ver en que aspectos mejorar para futuras atenciones.",
            "pregunta1" => "1. ¿Cuál es su grado de satisfacción con la atención recibida por parte de nuestros operadores? Siendo 1 el mínimo, 5 el máximo.",
            "pregunta2" => "2. ¿Cuál es su grado de satisfacción con la atención recibida por parte del servicio ofrecido? Siendo 1 el mínimo, 5 el máximo.",
            "pregunta3" => "3. ¿Recomendaría nuestro servicio?",
            "si" => "Si",
            "no" => "No",
            "enviar" => "Enviar",
            "agradecimiento" => "¡Gracias por completar la encuesta!",
            "cierre" => "Agradecemos mucho que hayas tomado el tiempo para responder a nuestras preguntas."
        ),
        "pt" => array(
            "selecIdioma" => "Linguagem:",
            "espanol" => "Español",
            "ingles" => "Inglés",
            "portugues" => "Português",
            "cambiarIdioma" => "Trocar",
            "titulo" => "Pesquisa de satisfação",
            "intro" => "Prezado, através do seguinte formulário pedimos que você responda algumas perguntas para saber o seu nível de satisfação com o nosso atendimento e ver quais aspectos podemos melhorar para futuros atendimentos.",
            "pregunta1" => "1. Qual o seu grau de satisfação com a atenção recebida dos nossos operadores? Sendo 1 o mínimo, 5 o máximo.",
            "pregunta2" => "2. Quão satisfeito você está com a atenção recebida pelo serviço oferecido? Sendo 1 o mínimo, 5 o máximo.",
            "pregunta3" => "3. Você recomendaria nosso serviço?",
            "si" => "Sim",
            "no" => "Não",
            "enviar" => "Enviar",
            "agradecimiento" => "Obrigado por completar a pesquisa!",
            "cierre" => "Agradecemos muito por você dedicar seu tempo para responder às nossas perguntas."
        ),
        "en" => array(
            "selecIdioma" => "Language:",
            "espanol" => "Español",
            "ingles" => "English",
            "portugues" => "Português",
            "cambiarIdioma" => "Change",
            "titulo" => "Satisfaction Survey",
            "intro" => "Dear, through the following form we ask you to answer some questions to find out your level of satisfaction with our care and see what aspects to improve for future care.",
            "pregunta1" => "1. What is your degree of satisfaction with the attention received from our operators? Being 1 the minimum, 5 the maximum.",
            "pregunta2" => "2. How satisfied are you with the attention received from the service offered? Being 1 the minimum, 5 the maximum.",
            "pregunta3" => "3. Would you recommend our service?",
            "si" => "Yes",
            "no" => "No",
            "enviar" => "Send",
            "agradecimiento" => "Thank you for completing the survey!",
            "cierre" => "We really appreciate you taking the time to answer our questions."
        )
        );

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Obtén los valores del formulario
            $ticket = $_POST['ticket'];
            $satisfaccionCentral = $_POST['satisfaccionCentral'];
            $satisfaccionProveedor = $_POST['satisfaccionProveedor'];
            $recomendarServicio = $_POST['recomendarServicio'];
            $mensajeAgradecimiento = "¡Gracias por completar la encuesta!";
          
            // Incluye el archivo de conexión a la base de datos
            $host = "db5014442073.hosting-data.io";
            $user = "dbu1522174";
            $pass = "Embrace2023!";
            $db = "dbs12009232";

            $conexion = mysqli_connect($host, $user, $pass, $db);

            // Prepara la consulta SQL para insertar los datos en la tabla respuestas_formulario
            $insertQuery = "INSERT INTO respuestas_formulario (TKT, SAS_CENTRAL, SAS_PROV, RECOM) VALUES ($ticket,'$satisfaccionCentral', '$satisfaccionProveedor', '$recomendarServicio')";

            // Ejecuta la consulta
            if (mysqli_query($conexion, $insertQuery)) {
                echo "<script>console.log('Datos guardados correctamente en la base de datos.');</script>";
            } else {
                echo "<script>console.log('Error al guardar en la base de datos.');</script>";
            }

    // Cierra la conexión a la base de datos
    mysqli_close($conexion);
        } else {
            // Si no se ha enviado el formulario, muestra el formulario
            $mensajeAgradecimiento = "";
        }
    ?>

<form action="muestra_ticket.php" method="GET" class="idiomaForm">
    <label for="idioma"><?php echo $traducciones[$idioma]["selecIdioma"]; ?></label>
    <select name="idioma" id="idioma" class="selectIdioma">
        <option value="es" <?php if ($idioma === 'es') echo 'selected'; ?>><?php echo $traducciones[$idioma]["espanol"]; ?></option>
        <option value="pt" <?php if ($idioma === 'pt') echo 'selected'; ?>><?php echo $traducciones[$idioma]["portugues"]; ?></option>
        <option value="en" <?php if ($idioma === 'en') echo 'selected'; ?>><?php echo $traducciones[$idioma]["ingles"]; ?></option>
    </select>
    <input type="hidden" name="ticket" value="<?php echo $ticket_id; ?>">
    <input type="submit" value="<?php echo $traducciones[$idioma]["cambiarIdioma"]; ?>" class="cambiarIdioma">
</form>


    <section class="sectGeneral">
        <section class="seccionFormulario">
            <div class="topFormulario">
                <p class="encuesta"><?php echo $traducciones[$idioma]["titulo"]; ?></p>
                <!-- <p class="intro"><?php echo $traducciones[$idioma]["intro"]; ?></p> -->
            </div>
            <div>
                 <h1><?php echo $mensajeAgradecimiento ? $traducciones[$idioma]["agradecimiento"] : ""; ?></h1>
                 <p><?php echo $mensajeAgradecimiento ? $traducciones[$idioma]["cierre"] : ""; ?></p>
            </div>
            <form id="encuestaForm" method="post">
                <p class="pregunta"><?php echo $traducciones[$idioma]["pregunta1"]; ?></p>
                <div class="respuestas">
                    <label>
                        <input type="radio" name="satisfaccionCentral" value="1" required=""> 1
                    </label>
                    <label>
                        <input type="radio" name="satisfaccionCentral" value="2" required=""> 2
                    </label>
                    <label>
                        <input type="radio" name="satisfaccionCentral" value="3" required=""> 3
                    </label>
                    <label>
                        <input type="radio" name="satisfaccionCentral" value="4" required=""> 4
                    </label>
                    <label>
                        <input type="radio" name="satisfaccionCentral" value="5" required=""> 5
                    </label>
                </div>
                <p class="pregunta"><?php echo $traducciones[$idioma]["pregunta2"]; ?></p>
                <div class="respuestas">
                    <label>
                        <input type="radio" name="satisfaccionProveedor" value="1" required=""> 1
                    </label>
                    <label>
                        <input type="radio" name="satisfaccionProveedor" value="2" required=""> 2
                    </label>
                    <label>
                        <input type="radio" name="satisfaccionProveedor" value="3" required=""> 3
                    </label>
                    <label>
                        <input type="radio" name="satisfaccionProveedor" value="4" required=""> 4
                    </label>
                    <label>
                        <input type="radio" name="satisfaccionProveedor" value="5" required=""> 5
                    </label>
                </div>
                <p class="pregunta"><?php echo $traducciones[$idioma]["pregunta3"]; ?></p>
                <div class="respuestas">
                    <label>
                        <input type="radio" name="recomendarServicio" value="si" required=""> <?php echo $traducciones[$idioma]["si"]; ?>
                    </label>
                    <label>
                        <input type="radio" name="recomendarServicio" value="no" required=""> <?php echo $traducciones[$idioma]["no"]; ?>
                    </label>
                </div>
                <br>
                <input type="submit" id="enviarEncuesta" name="enviarEncuesta" value="<?php echo $traducciones[$idioma]["enviar"]; ?>">
                <input type="hidden" name="ticket" value="<?php echo $ticket_id; ?>">
            </form>
        </section>
    </section>
</body>
  
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Función para ocultar los elementos después de enviar la encuesta
        function ocultarElementos() {
            var respuestasDivs = document.querySelectorAll(".respuestas");
            var enviarEncuestaBtn = document.getElementById("enviarEncuesta");

            for (var i = 0; i < respuestasDivs.length; i++) {
                respuestasDivs[i].style.display = "none";
            }

            if (enviarEncuestaBtn) {
                enviarEncuestaBtn.style.display = "none";
            }
        }

        // Agregar un evento de escucha para el envío del formulario
        var encuestaForm = document.getElementById("encuestaForm");
        if (encuestaForm) {
            encuestaForm.addEventListener("submit", function() {
                ocultarElementos();
            });
        }
    });
</script>

</html>