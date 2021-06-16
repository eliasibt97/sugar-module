<?php

class DBConfig extends PDO {

    public $connection;
    private $db_host = 'localhost';
    private $db_name = 'sgcweb';
    private $db_user = 'root';
    private $db_pass = 'eBsr72)9';    

    public function __construct(){
        if(is_null($this->connection)) {
            $this->connection = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name,$this->db_user, $this->db_pass);
        }
        return $this->connection;
    }
}
?>