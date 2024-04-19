<?php
class ConexionBD {
    private $servername = "tsmx-palacedq-dev.cp18xf4sbosj.us-west-2.rds.amazonaws.com"; // Cambia localhost por tu servidor si es diferente
    private $username = "admin";
    private $password = "yZq4FgmGz7re9Jie3HXA";
    private $dbname = "UsuariosTest";
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
