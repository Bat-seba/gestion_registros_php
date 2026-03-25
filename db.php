<?php

session_start(); // Iniciamos la sesión

$conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'gestion_registros_php'
);

// Para comprobarlo que existe se puede hacer el siguiente IF y mostrar mensaje.
/*
if (isset ($conn)) {
    echo 'La base de datos está conectada.';
}
*/
?>