<?php

class AdminPanel {

    protected $db;

    public function __construct() {
        require_once 'DataBase.php';
        $this->db = new DataBase();
    }

    // Метод добавление записи в таблицу
    public function append($description, $code, $dbname) {
    
            $codeX = addcslashes($code, '\'');
            $sql = "INSERT INTO $dbname(description, code) VALUES('$description', '$codeX')";
        
            $result = $this->db->query($sql);
            if($result != false) {
                echo '<p style="color: white;">Добавлено</p>';
            }
        }
    
    // Метод на изменение записи в таблицe
    public function change($id, $description, $code, $dbname) {

        $codeX = addcslashes($code, '\'');
        $sql = "UPDATE $dbname SET description = '$description', code = '$codeX' WHERE id = $id";

        $result = $this->db->query($sql);
        
        if($result != false) {
            echo '<p style="color: white;">Изменнено</p>';
        }
    }

}
?>
