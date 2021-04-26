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
  $numseg = $_POST['numseg'];
    $numcuen = $_POST['numcuent'];
    $ccss = $_POST['ccss'];
    $pagos = $_POST['pagos'];
    $pro = $_POST['catpro'];


  $query = "INSERT INTO empleado(id, Cedula, Nombre, Ape1, Ape2, Direccion, Fechanac, Telefono, Correo, 
                               Sexo, Numseguridad, Numcuentaseg, CCSS, Pagos, Catprofesional) 
                               VALUES ('$id', '$cedula', '$nombre', '$ape1', '$ape2', '$direc', 
                                       '$fecha', '$tel','$correo', '$sexo', '$numseg', 
                                       '$numcuen','$ccss', '$pagos', '$pro')";
  
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'La informacion ha sido guardado exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: empleadocreate.php');

}

?>
