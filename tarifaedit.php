<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tarifas WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $meses = $row['Meses'];
    $precio = $row['Precio'];
    $descripcion = $row['Descripcion'];
    $estado = $row['Estado'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $meses = $_POST['Meses'];
  $precio = $_POST['Precio'];
  $descripcion = $_POST['Descripcion'];
  $estado = $_POST['Estado'];

  $query = "UPDATE tarifas set Meses = '$meses', Precio = '$precio', Descripcion = '$descripcion', Estado = '$estado' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: tarifaindex.php');
}

?>
<?php include('header.php'); ?>
<div class="container p-4">
<h2>Actualizar Tarifa</h2>
  <div class="row">
    <div class="col-md-4 mx-auto">
     
      <form action="tarifaedit.php?id=<?php echo $_GET['id']; ?>" method="POST">
       
      <div class="form-group">
        <textarea name="meses" class="form-control"><?php echo $meses;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="precio" class="form-control" ><?php echo $precio;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="descripcion" class="form-control" ><?php echo $descripcion;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="estado" class="form-control"><?php echo $estado;?></textarea>
        </div>
        
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
