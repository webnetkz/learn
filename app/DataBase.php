<?php
    
class DataBase {
    
    public $pdo;
    protected $driver = 'mysql';
    protected $host = 'localhost';
    protected $dbname = 'learn_sql';
    protected $charset = 'utf8';
    protected $port = 3306;
    protected $login = 'root';
    protected $pass = '';
    protected $option = [
        
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Error mod
        PDO::ATTR_PERSISTENT => true // Continuous connect

    ];

    public function __construct() {
        try {
            $this->pdo = new PDO(
                 $this->driver .
                 ':host=' . $this->host .
                ';dbname=' . $this->dbname . 
                 ';charset=' . $this->charset . 
                 ';port=' . $this->port . ';' , 
                 $this->login,
                 $this->pass
                );
         } catch(PDOException $e) {
            exit('Нет подключение к Базе данных. Ошибка: ' . $e->getMessage());
        }
    }
       // Применение подготовленых выражений, при помощи именованых placeholders
     public function query($sql, $params = []) {
        $stmt = $this->pdo->prepare($sql);

          if (!empty($params)) {
              foreach ($params as $key => $val) {
                   $stmt->bindValue(':'.$key, $val);
               }
           }

        $stmt->execute();
        return $stmt;

        return $query;
    }
       // Возврат строки
     public function row($sql, $params = []) {
         $result = $this->query($sql, $params);
         return $result->fetchAll(PDO::FETCH_ASSOC);
    }
      // Возврат колонки
     public function column($sql, $params = []) {
         $result = $this->query($sql, $params);
         return $result->fetchColumn(PDO::FETCH_ASSOC);
    }
}