<?php
    $destinatario = 'reizovelasquezc@gmail.com';
    $asunto = 'Solicitud de informacion IE Nuevo Mundo';
    
    $nombre = filter_input(INPUT_POST, 'nombre');
    $apellido = filter_input(INPUT_POST, 'apellido');
    $telefono = filter_input(INPUT_POST, 'telefono');
    $email = filter_input(INPUT_POST, 'email');
    
    $header = "I.E Nuevo Mundo";
    $mensajeCompleto = "Nombre del solicitante: ". $nombre . "\nApellido del solicitante: " . $apellido .
            "\nInformacion de Contacto" . "\nTelefono: ". $telefono . "\nCorreo: " . $email;
    
    
    mail($destinatario, $mensajeCompleto, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";



