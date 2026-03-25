<?php

include("db.php");  // Requerimos la conexion a la base de datos php.

if (isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    //Guardar un dato dentro de MySQL
    $query = "INSERT INTO tareas(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query failed");
    }

    $_SESSION['message'] = 'Tarea guardada correctamente';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php"); // Redireccionamos al index.php
}

?>


  
