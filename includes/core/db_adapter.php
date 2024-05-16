<?php
namespace Buchladen\Core;

// import config
include_once __DIR__ . '/config.php';

use Exception;
use PDO;
use PDOException;

class DatabaseAdapter {
    private $pdo;
    private $logger;

    public function __construct() {
        $this->db_conn();
    }

    private function db_conn(){
        // server settings
        $db_type = DB_TYPE;
        $db_server = DB_SERVER;
        $db_port = DB_PORT;
        $db_dbname = DB_NAME;
        $db_username = DB_USER;
        $db_password = DB_PASSWORD;

        // create and check connection
        try {
            $this->pdo = new PDO("$db_type:host=$db_server;port=$db_port;dbname=$db_dbname", $db_username, $db_password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new Exception('DB_ADAPTER: pdo connection error');
        }
    }

    public function db_query($query, $params = []){    
        // prepare query
        $stmt = $this->pdo->prepare($query);
    
        // bind parameters and execute query
        foreach ($params as $param => $value) {
            $stmt->bindValue(':'.$param, $value);
        }

        $stmt->execute();

        // fetch results and return
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
}