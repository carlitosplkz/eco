<?php

class Database {
    private $host = 'localhost'; // Cambia por tu servidor de base de datos si es necesario
    private $db_name = 'ecored'; // Nombre de tu base de datos
    private $username = 'root'; // Usuario de la base de datos (ajusta según tu configuración)
    private $password = ''; // Contraseña de la base de datos (ajusta según tu configuración)
    private $conn;

    // Método para obtener la conexión a la base de datos
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            // Establecer el modo de errores de PDO a excepción
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Conexión fallida: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
