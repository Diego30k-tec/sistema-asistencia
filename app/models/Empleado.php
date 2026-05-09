<?php
//Llamamos a la conexión de la base de datos.
require_once __DIR__ . '/../core/Database.php';
//Creamos el modelo o clase llamado Empleado (SINGULAR)
class Empleado{
// La propiedad $db guardará la conexión PDO.
    // Le decimos que solo puede ser de tipo PDO (tipado estricto).
    // "private" significa que solo se puede usar dentro de esta clase.
    //modificador de acceso("private")
    private PDO $db;

    //Al crear el modelo, obtenemos la conexion automaticamente.
    public function __construct(){
        // Database::getConnection() nos regresa la conexión PDO que creamos en core/Database.php.
        // Al guardarla en $this->db, cualquier método de esta clase puede usarla.
        $this->db = Database::getConnection();
    }
    //Creamos el modulo  para llamar todo los datos de la tabla EMPLEADOS
    //public funcion getAll():array
    public function obtenerTodo():array {
        //variable $sql para almacenar
        $sql = "SELECT * FROM empleado";
        //statement = declaración
        $stmt = $this->db->prepare($sql);
        //Ejecutamos la declaración (stmt)
        $stmt->execute();
        //Retornamos los datos
        return $stmt->fetchAll();
    }
}