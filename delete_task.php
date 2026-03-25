<?php

    include("db.php");  // Requerimos la conexion a la base de datos php.

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM tareas WHERE id=$id";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Failed");
        }

        $_SESSION['message'] = 'Tarea eliminada correctamente';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }
?>