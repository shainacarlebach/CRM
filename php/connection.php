<?php
  
class Connection {
        private $host = '127.0.0.1';
        private $db   = 'northwind';
        private $user = 'root';
        private $pass = '';
        private $charset = 'utf8';
        private $pdo;
        private $dsn;
        private $opt;

        function __construct() {
            $this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
            $this->opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
        }
           
    
    function executeStatement($stmt) {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $pdo = new PDO($dsn, $this->user, $this->pass, $this->opt);
        $stmt = $pdo->prepare($stmt);
        $stmt->execute();
        return $stmt;
      
    }
}
?>