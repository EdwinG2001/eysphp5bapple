<?php
class Telefono {
    private $conn;
    private $table_name = "telefono";

    public $id;
    public $numero;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Crear un nuevo telefono
    public function create() {
        try {
            $query = "INSERT INTO " . $this->table_name . " (numero) VALUES (:numero)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":numero", $this->numero, PDO::PARAM_STR);

            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error en create(): " . $e->getMessage());
            return false;
        }
    }

    public function read() {
        try {
            $query = "SELECT * FROM " . $this->table_name;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (PDOException $e) {
            error_log("Error en read(): " . $e->getMessage());
            return [];
        }
    }

    // Leer un solo telefono por ID
    public function readOne() {
        try {
            $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id LIMIT 1";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($row) {
                $this->numero = $row['numero'];
            }
            return $row;
        } catch (PDOException $e) {
            error_log("Error en readOne(): " . $e->getMessage());
            return null;
        }
    }

    // Actualizar un telefono
    public function update() {
        try {
            $query = "UPDATE " . $this->table_name . " SET numero = :numero WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":numero", $this->numero, PDO::PARAM_STR);
            $stmt->bindParam(":id", $this->id, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error en update(): " . $e->getMessage());
            return false;
        }
    }

    // Eliminar un telefono
    public function delete() {
        try {
            $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $this->id, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error en delete(): " . $e->getMessage());
            return false;
        }
    }
}
?></content>
<parameter name="filePath">c:\Users\Edwin Guillermo\Desktop\Framework\eysphp5bapple\app\models\Telefono.php