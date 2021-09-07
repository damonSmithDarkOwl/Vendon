<?php
class connection{ 
    //Draugiem Group given db
    private $host = "127.0.0.1";
    private $user = "dbman";
    private $password = "w3Xp7Ug7ZtNQAT5h";
    private $dbName = "damon_private";
    private $connection = null;

    //Mysqli with an I connection
    public function connect(){
        //For Debug
        if($this->connection){
            return $this->connection;
        }
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbName.';';
        //PDO connection
        $pdo = new PDO($dsn,$this->user,$this->password);
        //Optional, sets the default fetching mode to associative array fetching mode
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->connection = $pdo;
        return $pdo;
    }
}