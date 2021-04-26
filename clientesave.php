<?php

include('db.php');

if (isset($_POST['save_task'])) {

  $id = $_POST['id'];
  $cedula = $_POST['cedula'];
  $nombre = $_POST['nombre'];
  $ape1 = $_POST['ape1'];
  $ape2 = $_POST['ape2'];
  $direc = $_POST['direccion'];
  $fecha = $_POST['fecha'];
  $tel = $_POST['tel'];
  $correo = $_POST['correo'];
  $sexo = $_POST['sexo'];
  $estado = $_POST['estado'];
  $tarifa = $_POST['tarifa'];
  $uva = $_POST['uva'];
  $fecharenov = $_POST['fecharenov'];
  $casillero = $_POST['casillero'];


  $query = "INSERT INTO cliente(id, Cedula, Nombre, Ape1, Ape2, Direccion, Fechanac, Telefono, Correo, 
                               Sexo, Estadocliente, Tarifa, SeccionUVA, Fecharenov, Casillero) 
                               VALUES ('$id', '$cedula', '$nombre', '$ape1', '$ape2', '$direc', 
                                       '$fecha', '$tel','$correo', '$sexo', '$estado', 
                                       '$tarifa','$uva', '$fecharenov', '$casillero')";
  
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'La informacion ha sido guardado exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: clientecreate.php');

}

?>
