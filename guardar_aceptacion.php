<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['acepta'])) {

    // Sanitizar datos
    $nombre = trim(htmlspecialchars($_POST['nombre']));
    $dni = trim(htmlspecialchars($_POST['dni']));
    $fecha = date("d-m-Y H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];

    // Validación básica
    if (empty($nombre) || empty($dni)) {
        die("Error: Datos incompletos.");
    }

    // Línea a guardar
    $linea = "Nombre: $nombre | DNI/CUIT: $dni | Fecha: $fecha | IP: $ip | Aceptado: SI\n";

    // Guardar en archivo
    file_put_contents("aceptaciones.txt", $linea, FILE_APPEND | LOCK_EX);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aceptación registrada</title>

<style>
body {
    margin:0;
    font-family: 'Segoe UI', Arial, sans-serif;
    background: linear-gradient(135deg, #16a34a, #15803d);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.card {
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 20px 40px rgba(0,0,0,0.3);
    text-align:center;
    max-width:400px;
    width:100%;
}

h2 {
    color:#16a34a;
    margin-bottom:10px;
}

p {
    margin:5px 0;
}

a {
    display:inline-block;
    margin-top:20px;
    padding:10px 20px;
    background:#16a34a;
    color:white;
    border-radius:10px;
    text-decoration:none;
    font-weight:600;
}

a:hover {
    background:#15803d;
}
</style>
</head>

<body>

<div class="card">
    <h2>✔ Aceptación registrada</h2>
    <p><strong><?php echo $nombre; ?></strong></p>
    <p>Fecha: <?php echo $fecha; ?></p>
    <a href="terminos.php">Volver</a>
</div>

</body>
</html>

<?php
} else {
    echo "Debe aceptar los términos.";
}
?>