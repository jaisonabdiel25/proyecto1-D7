<?php
require_once('config.php');

class modeloCredencialesBD{
    protected $_bd;

    public function __construct(){
        $this->_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if($this->_db->connect_errno){
            echo "falla al conectar con la base de datos ".$this->dbconnect_errno;
            return;
        }
    }
}
?>