<?php

include('db.php');

if (isset($_POST['save_task'])) {

  $id = $_POST['id'];
  $nombre = $_POST['Nombre'];
  $descripcion = $_POST['Descripcion'];
  $consulta = $_POST['Consulta'];


  $query = "INSERT INTO sala(id, Nombre, Descripcion, Consulta) VALUES ('$id', '$nombre', '$descripcion', '$consulta')";
  
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'La informacion ha sido guardado exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: salacreate.php');

}

?>
