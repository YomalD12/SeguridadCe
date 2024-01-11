<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $destinatario = $_POST["destinatario"];
    $mensaje = $_POST["mensaje"];
    $clave = intval($_POST["clave"]);

    // Aplicar cifrado César al mensaje
    $mensaje_cifrado = cifradoCesar($mensaje, $clave);

    // Configurar cabeceras del correo
    $cabeceras = "From: yomald1212@email.com" . "\r\n" .
                 "Reply-To: jfzp97.jz@email.com" . "\r\n" .
                 "X-Mailer: PHP/" . phpversion();

    // Enviar el correo cifrado
    mail($destinatario, "Correo Cifrado", $mensaje_cifrado, $cabeceras);

    // Redireccionar o mostrar mensaje de éxito
    header("Location: index.php?enviado=1");
    exit;
}

function cifradoCesar($texto, $clave) {
    $resultado = "";
    $longitud = strlen($texto);

    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $texto[$i];
        
        if (ctype_alpha($caracter)) {
            $mayuscula = ctype_upper($caracter);
            $caracter = chr((ord($caracter) + $clave - ($mayuscula ? 65 : 97)) % 26 + ($mayuscula ? 65 : 97));
        }
        
        $resultado .= $caracter;
    }

    return $resultado;
}
?>

