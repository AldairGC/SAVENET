<?php
    require 'bd_bd.php';
    $nameuser = $_POST['user'];
    $passA = $_POST['passA'];
    $userBD = "root";
    $passUserBD = "aldairGC15";
    $obj = new DB($userBD, $passUserBD);    
    $obj->NewPass($passA, $nameuser);
?>
