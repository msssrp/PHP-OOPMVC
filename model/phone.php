<?php

class phone {
    private $connectDB;

    public function __construct(){
         $con = new database();
        $con->__construct();
        $con->connect();
        $this->connectDB = $con->connectDB;
    }

    public function getPhoneDetail(){
        $sql = "SELECT * FROM phone_details";
      
        if ($this->connectDB) {
            $query = $this->connectDB->prepare($sql);
            if($query->execute()){
                $res = $query->fetchAll(PDO::FETCH_ASSOC);
                $data = json_encode($res);
                return $data;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getPhoneDetailByID($id){
    $sql = "SELECT * FROM phone_details WHERE id = ?";
  
    if ($this->connectDB) {
        $query = $this->connectDB->prepare($sql);
        $query->bindParam(1, $id);
        if($query->execute()){
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $data = json_encode($res);
            return $data;
        } else {
            return false;
        }
    } else {
        return false;
    }
}


}


?>