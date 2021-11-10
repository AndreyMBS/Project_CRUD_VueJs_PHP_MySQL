<?php
    require "conexion.php";
    
    $datos = json_decode(file_get_contents("php://input"));
    $request = $datos->request;
    
    if($request == 1){
      $sql = "SELECT idUsuario, nombre, apellido, telefono, email, direccion FROM usuarios";
      $query = $mysqli->query($sql);
        
      $datos = array();
      while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
      }
      
      echo json_encode($datos);
      exit;
    }

    if($request == 2) {

      $nombre = $datos->nombre;
      $apellido = $datos->apellido;
      $telefono = $datos->telefono;
      $email = $datos->email;
      $direccion = $datos->direccion;      

        $sql_insert = "INSERT INTO usuarios(nombre, apellido, telefono, email, direccion) VALUES('$nombre', '$apellido', '$telefono', '$email', '$direccion')";
        if($mysqli->query($sql_insert) === TRUE) {
          
        } else {
          echo "Ocurrio un problema.";
        }
      
      exit;
    }

    if($request == 3) {

      $idUsuario = $datos->idUsuario;
      $nombre = $datos->nombre;
      $apellido = $datos->apellido;
      $telefono = $datos->telefono;
      $email = $datos->email;
      $direccion = $datos->direccion;


      $sql_edit = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', telefono='$telefono', email='$email', direccion='$direccion' WHERE idUsuario='$idUsuario'";
      $query_update = $mysqli->query($sql_edit);
      print_r($datos);
      echo "Se actualizo el registro.";
      exit;
    }

    if($request == 4) {
      
      $idUsuario = $datos->idUsuario;

      $sql_delete = "DELETE FROM usuarios WHERE idUsuario='$idUsuario'";
      $query_delete = $mysqli->query($sql_delete);
  
      exit;
    }

?>