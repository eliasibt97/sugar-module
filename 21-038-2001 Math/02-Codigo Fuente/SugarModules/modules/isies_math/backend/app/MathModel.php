<?php

require "backend/shared/DBConfig.php";

class MathModel {

    private $db;

    public function __construct(){
        if($this->db) $this->db = new DBConfig();
        return $this->db;
    }

    public function index() {
        try {
            $query = $this->db->connection->prepare("SELECT * FROM isies_math;");
            $query->execute();

            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $th) {
            throw $th;
        } catch (Exception $e) {
            throw $e->getMessage();
        }
    }

    public function make($num1, $num2, $tipo, $resultado){
        try {
            $query = $this->db->connection->prepare("INSERT INTO isies_math (numero_uno, numero_dos, resultado, tipo_id) 
                                                    VALUES (".$num1.",".$num2.",".$resultado.",".$tipo.");");
            $query->execute();
            return true;

        } catch (PDOException $th) {
            throw $th;
        } catch (Exception $e) {
            throw $e->getMessage();
        }
    }

    /**
     * Obtiene / Comprueba que un registro exista
     * @param int $id Id de registro en DB
     */
    private function getById($id){
        try {
            $query = $this->db->connection->prepare("SELECT id FROM isies_math WHERE id = ".$id);
            if(!$query->execute()) return false;
            return true;
        } catch (PDOException $th) {
            throw false;
        } catch (Exception $e) {
            throw false;
        }
    }

    public function delete($id) {
        try {
            // Comprobar que el registro exista
            if(!$this->getById($id)) {
                return false;
            }
            //Proceder a la eliminación
            $query = $this->db->connection->prepare("DELETE FROM isies_math WHERE id = ".$id);
            $query->execute();
            return true;

        } catch (PDOException $th) {
            throw $th;
        } catch (Exception $e) {
            throw $e->getMessage();
        }
    }
}

?>