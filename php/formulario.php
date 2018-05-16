<?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $reqlen = strlen($nombre) * strlen($email) * strlen($asunto) * strlen($mensaje);
    if ($reqlen > 0) {
        require ("connect_db.php");
        mysql_query("INSERT INTO formulario VALUES('','$nombre','$email','$asunto','$mensaje')");
        mysql_close($link);
        echo 'Gracias por su mensaje';
    } else {
        echo 'Por favor, rellene todos los campos requeridos.';
        
    }
    

?>