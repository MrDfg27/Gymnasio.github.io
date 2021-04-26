<?php

include('db.php');

if (isset($_POST['save_task'])) {

  $id = $_POST['id'];
  $sala = $_POST['sala'];
  $dia = $_POST['dia'];
  $hora = $_POST['hora'];
  $actividad = $_POST['actividad'];
  $empleado = $_POST['empleado'];


  $query = "INSERT INTO clase(id, idsala, Dia, Hora, idactividad, idempleados) VALUES ('$id', '$sala', '$dia', '$hora', '$actividad', '$empleado')";
  
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'La informacion ha sido guardado exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: clasecreate.php');

}

?>
