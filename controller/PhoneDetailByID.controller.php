<?php

include_once("../../model/database.php");
include_once("../../model/phone.php");



$obj = new phone();
$id = $_GET['id'];      
$res = $obj->getPhoneDetailByID($id); 
$jsonDecode = json_decode($res,true);

?>