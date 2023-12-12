<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Envío de Email Cifrado</title>
</head>
<body>
    <h2>Formulario de Envío de Email Cifrado</h2>
    <form action="enviar_email.php" method="post">
        <label for="destinatario">Destinatario:</label>
        <input type="email" name="destinatario" required><br>

        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" rows="4" required></textarea><br>

        <label for="clave">Clave de Cifrado:</label>
        <input type="number" name="clave" required><br>

        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>
