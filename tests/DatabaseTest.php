<?php
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase {
    public function testConexionBaseDeDatos() {
        // Cargamos el archivo que abre la conexión
        include 'db.php';

        // Verificamos que la variable $conn exista y sea una conexión válida de MySQL
        $this->assertNotNull($conn, "La variable de conexión es nula.");
        $this->assertInstanceOf(mysqli::class, $conn, "No es una instancia válida de MySQL.");
        
        // Comprobamos que la base de datos responda
        $this->assertTrue($conn->ping(), "La base de datos no responde.");
    }
}