<?php
    
    $mysqli = new mysqli("localhost","root","","pruebas");
    
    if($mysqli->connect_errno) {
        die("Falló la conexion");
    } 
    
?>
