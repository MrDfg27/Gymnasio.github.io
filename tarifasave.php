<?php

include('db.php');

if (isset($_POST['save_task'])) {

  $id = $_POST['id'];
  $meses = $_POST['meses'];
  $precio = $_POST['precio'];
  $descripcion = $_POST['descripcion'];
  $estado = $_POST['estado'];


  $query = "INSERT INTO tarifas(id, Meses, Precio, Descripcion, Estado) VALUES ('$id', '$meses', '$precio', '$descripcion', '$estado')";
  
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'La informacion ha sido guardado exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: tarifacreate.php');

}

?>
