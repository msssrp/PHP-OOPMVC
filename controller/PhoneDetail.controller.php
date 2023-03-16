<?php

include_once("../../model/database.php");
include_once("../../model/phone.php");

$obj = new phone();
$res = $obj->getPhoneDetail();
$jsonDecode = json_decode($res,true);


?>