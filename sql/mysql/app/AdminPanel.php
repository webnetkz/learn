<?php

class AdminPanel {

    protected $db;

    public function __construct() {
        require_once 'DataBase.php';
        $this->db = new DataBase();
    }

    // Метод добавление записи
    public function append($description, $code, $dbname) {
    
        $codeX = addcslashes($code, '\'');
        $sql = "INSERT INTO $dbname(description, code) VALUES('$description', '$codeX')";
        
        $result = $this->db->query($sql);

        if($result != false) {
             echo '<p style="color: white; margin: 10px;">Добавлено</p>';
        }
    }
    
    // Метод на изменение записи
    public function change($id, $description, $code, $dbname) {

        $codeX = addcslashes($code, '\'');
        $sql = "UPDATE $dbname SET description = '$description', code = '$codeX' WHERE id = $id";

        $result = $this->db->query($sql);
        
        if($result != false) {
            echo '<p style="color: white; margin: 10px;">Изменнено</p>';
        }
    }

    // Метод выбора записи
    public function select($id, $dbname) {

        $sql = "SELECT * FROM $dbname WHERE id = $id";

        $stmt = $this->db->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($result == false) {
            echo '<p style="color: white; margin: 10px;">Неверный ID</p>';
        }
        return $result;
    }

}
?>
