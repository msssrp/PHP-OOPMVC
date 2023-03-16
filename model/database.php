<?php 

class database{
    private $host, $database, $user, $password;
    public $connectDB;

    public function __construct(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->database='Phone';
    }

    public function connect(){
        try {
            $this->connectDB = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }   
}

?>