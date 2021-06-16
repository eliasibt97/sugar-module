<?php

// require "../shared/DBConfig.php";

class MathModel {

    

    public function __construct(){
        /* if($this->db) $this->db = new DBConfig();
        return $this->db;*/
    }

    public function index() {
        global $db;
        try {
            return $db->query("SELECT * FROM isies_math;");;
        } catch (PDOException $th) {
            throw $th;
        } catch (Exception $e) {
            throw $e->getMessage();
        }
    }

    public function make($num1, $num2, $tipo, $resultado){
        global $db;
        try {
            $db->query("INSERT INTO isies_math (numero_uno, numero_dos, resultado, tipo) 
                                                    VALUES (".$num1.",".$num2.",".$resultado.",'".$tipo."');");
            return true;

        } catch (Exception $e) {
            throw $e->getMessage();
        }
    }

    /**
     * Obtiene / Comprueba que un registro exista
     * @param int $id Id de registro en DB
     */
    private function getById($id){
        global $db;
        try {
            $db->query("SELECT id FROM isies_math WHERE id = ".$id);
            return true;
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
            global $db;
            //Proceder a la eliminación
            $query = $db->query("DELETE FROM isies_math WHERE id = ".$id);
         
            return true;

        } catch (Exception $e) {
            throw $e->getMessage();
        }
    }
}

?>