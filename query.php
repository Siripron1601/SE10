<?php

// ดึงค่าข้อมูลของ User ที่มีอยู่ในระบบ
function get_User($formalId){
    require('connect.php');
    $stmt = $con->query("SELECT * FROM `db_user` WHERE `formalId` ='$formalId'");
    return $stmt;
}

// เพิ่มข้อมูล User ในระบบ
function Add_User($formalId,$title,$firstname,$lastname,$status,$email){
    require('connect.php');
    $con->query("INSERT INTO `db_user` (`uid`, `formalId`, `title`, `firstname`, `lastname`, `status`, `isAdmin`, `email`) VALUES (NULL, '$formalId', '$title', '$firstname', '$lastname', '$status', '0', '$email')");
}
?>