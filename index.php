<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Envío de Email Cifrado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Formulario de Envío de Email Cifrado</h2>
    <form action="enviar_email.php" method="post">
        <label for="destinatario">Destinatario:</label>
        <input type="email" name="destinatario" required>

        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" rows="4" required></textarea>

        <label for="clave">Clave de Cifrado:</label>
        <input type="number" name="clave" required>

        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>

