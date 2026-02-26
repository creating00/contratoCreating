<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Términos y Condiciones - Creating Consulting</title>

<style>
:root {
    --primary: #111827;
    --accent: #2563eb;
    --light: #f3f4f6;
}

body {
    margin: 0;
    font-family: 'Segoe UI', Arial, sans-serif;
    background: linear-gradient(135deg, #1f2937, #111827);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
}

.container {
    background: white;
    width: 100%;
    max-width: 900px;
    border-radius: 16px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    padding: 30px;
}

h1 {
    text-align: center;
    color: var(--primary);
    margin-bottom: 10px;
}

h2 {
    color: var(--primary);
    margin-top: 25px;
}

.terms-box {
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 12px;
    height: 360px;
    overflow-y: auto;
    background: var(--light);
    font-size: 14px;
    line-height: 1.6;
}

form {
    margin-top: 25px;
}

label {
    font-weight: 600;
    margin-top: 15px;
    display: block;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 8px;
    border: 1px solid #ccc;
}

.checkbox-container {
    margin-top: 15px;
    display: flex;
    gap: 10px;
    font-size: 14px;
}

button {
    margin-top: 20px;
    width: 100%;
    padding: 12px;
    background: var(--accent);
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

button:hover {
    background: #1d4ed8;
}

.footer {
    margin-top: 15px;
    text-align: center;
    font-size: 12px;
    color: #6b7280;
}

@media (max-width: 600px) {
    .terms-box {
        height: 300px;
        font-size: 13px;
    }
}
</style>
</head>

<body>

<div class="container">
    <h1>Términos y Condiciones del Servicio Mensual</h1>
    <p style="text-align:center;"><strong>Creating Consulting</strong></p>

    <div class="terms-box">

        <p>
        El presente documento describe los términos y condiciones del Servicio Mensual brindado por
        <strong>Creating Consulting</strong>, representada por <strong>Jonatan Gabriel Asalle</strong>,
        en adelante <strong>EL PRESTADOR</strong>.
        </p>

        <p>
        La aceptación del presente documento implica la conformidad del cliente, en adelante
        <strong>EL CLIENTE</strong>, con las condiciones aquí detalladas.
        </p>

        <h2>1. Alcance del servicio</h2>
        <p>
        El servicio mensual tiene como objetivo asegurar el correcto funcionamiento, mantenimiento
        y soporte del sistema informático entregado.
        </p>

        <h2>2. Servicios incluidos</h2>
        <ul>
            <li>Alojamiento en la nube (hosting) y subdominio.</li>
            <li>Soporte técnico remoto para el sistema entregado.</li>
            <li>Cambios y ajustes mínimos en el software (correcciones, configuraciones y mejoras puntuales).</li>
            <li>Copias de seguridad automáticas de la información relevante.</li>
            <li>Restauración de datos ante fallas, errores o pérdidas.</li>
            <li>Actualizaciones menores y mantenimiento preventivo del sistema.</li>
        </ul>

        <h2>3. Servicios no incluidos y desarrollos adicionales</h2>
        <ul>
            <li>No se incluyen desarrollos grandes, módulos nuevos ni cambios estructurales del sistema.</li>
            <li>Estos trabajos se cotizan por separado.</li>
            <li>
                Mientras el servicio mensual se encuentre activo y al día, dichos desarrollos
                contarán con un <strong>30% de descuento</strong> sobre el valor presupuestado.
            </li>
        </ul>

        <h2>4. Costo y forma de pago</h2>
        <ul>
            <li>Valor del servicio: <strong>$40.000 (pesos cuarenta mil) mensuales</strong>.</li>
            <li>El pago deberá realizarse entre los días <strong>10 y 15 de cada mes</strong>.</li>
            <li>La falta de pago podrá ocasionar la suspensión del servicio hasta su regularización.</li>
        </ul>

        <h2>5. Vigencia y baja del servicio</h2>
        <ul>
            <li>El servicio es mensual y se renueva automáticamente con el pago.</li>
            <li>Cualquiera de las partes podrá solicitar la baja notificando con al menos
                <strong>15 días de anticipación</strong>.
            </li>
        </ul>

        <h2>6. Soporte y confidencialidad</h2>
        <ul>
            <li>El soporte se brinda de manera remota, en días y horarios laborales.</li>
            <li>
                EL PRESTADOR se compromete a resguardar la confidencialidad, privacidad y seguridad
                de los datos del sistema.
            </li>
        </ul>

        <h2>7. Modificaciones</h2>
        <p>
        Cualquier modificación en el alcance o valor del servicio será comunicada al cliente
        con la debida anticipación.
        </p>

        <h2>ACEPTACIÓN Y CONFORMIDAD</h2>
        <p>
        La aceptación de estos términos mediante el formulario constituye conformidad expresa
        del CLIENTE.
        </p>

    </div>

    <form action="guardar_aceptacion.php" method="POST">

        <label>Nombre / Razón Social</label>
        <input type="text" name="nombre" required>

        <label>DNI / CUIT</label>
        <input type="text" name="dni" required>

        <div class="checkbox-container">
            <input type="checkbox" name="acepta" required>
            <span>He leído y acepto los Términos y Condiciones del Servicio Mensual</span>
        </div>

        <button type="submit">Aceptar y Continuar</button>
    </form>

    <div class="footer">
        © <?php echo date("Y"); ?> Creating Consulting
    </div>
</div>

</body>
</html>