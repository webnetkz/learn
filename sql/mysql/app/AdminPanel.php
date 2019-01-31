<?php

class AdminPanel {

    protected $db;

    public function __construct() {
        require_once 'DataBase.php';
        $this->db = new DataBase();
    }

    public function append($description, $code) {
    
            $codeX = addcslashes($code, '\'');
            $sql = "INSERT INTO create_sql(description, code) VALUES('$description', '$codeX')";
        
            $result = $this->db->query($sql);
        }

}
?>
