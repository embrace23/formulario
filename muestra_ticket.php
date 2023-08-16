<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Ticket</title>
</head>
<body>
    <?php
    if (isset($_GET['ticket'])) {
        $ticket = $_GET['ticket'];
        echo "<h1>Ticket número: $ticket</h1>";
        
    } else {
        echo "<p>No se proporcionó un número de ticket válido.</p>";
    }
    ?>
    <form id="encuestaForm">
        <p>1. ¿Cuál es su grado de satisfacción con la atención recibida con nuestra central de operaciones?</p>
        <label>
            <input type="radio" name="satisfaccionCentral" value="1"> 1
        </label>
        <label>
            <input type="radio" name="satisfaccionCentral" value="2"> 2
        </label>
        <label>
            <input type="radio" name="satisfaccionCentral" value="3"> 3
        </label>
        <label>
            <input type="radio" name="satisfaccionCentral" value="4"> 4
        </label>
        <label>
            <input type="radio" name="satisfaccionCentral" value="5"> 5
        </label>
        <p>2. ¿Cuál es su grado de satisfacción con la atención recibida por parte de nuestro proveedor?</p>
        <label>
            <input type="radio" name="satisfaccionProveedor" value="1"> 1
        </label>
        <label>
            <input type="radio" name="satisfaccionProveedor" value="2"> 2
        </label>
        <label>
            <input type="radio" name="satisfaccionProveedor" value="3"> 3
        </label>
        <label>
            <input type="radio" name="satisfaccionProveedor" value="4"> 4
        </label>
        <label>
            <input type="radio" name="satisfaccionProveedor" value="5"> 5
        </label>
        <p>3. ¿Recomendaría nuestro servicio?</p>
        <label>
            <input type="radio" name="recomendarServicio" value="si"> Sí
        </label>
        <label>
            <input type="radio" name="recomendarServicio" value="no"> No
        </label>
        <br>
        <br>
        <button id="enviarEncuesta" type="button">Enviar encuesta</button>
    </form>

    <section id="agradecimiento" style="display: none;">
        <p>Gracias por realizar nuestra encuesta.</p>
    </section>

    <script>
        const botonEnviar = document.getElementById("enviarEncuesta");
        const formulario = document.getElementById("encuestaForm");
        const agradecimiento = document.getElementById("agradecimiento");
        botonEnviar.addEventListener("click", function(){
            formulario.style.display = "none";
            agradecimiento.style.display = "block";
        })

    </script>
</body>
</html>
