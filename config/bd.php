<?php
class ConexionBD {
    private $servername = "localhost"; // Cambia localhost por tu servidor si es diferente
    private $username = "root";
    private $password = "";
    private $dbname = "facebook";
    public $conn;

    // Constructor: se conecta automáticamente cuando se instancia la clase
    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Conexión exitosa";
        } catch(PDOException $e) {
            // echo "Error de conexión: " . $e->getMessage();
        }
    }

    // Método para cerrar la conexión
    public function cerrarConexion() {
        $this->conn = null;
    }
}

// Ejemplo de uso
$conexion = new ConexionBD();
// Puedes acceder a la conexión usando $conexion->conn
// Por ejemplo, para cerrar la conexión: $conexion->cerrarConexion();
?>
