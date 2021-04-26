<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM sala WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['Nombre'];
    $descripcion = $row['Descripcion'];
    $consulta = $row['Consulta'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['Nombre'];
  $descripcion = $_POST['Descripcion'];
  $consulta = $_POST['Consulta'];

  $query = "UPDATE sala set Nombre = '$nombre', Descripcion = '$descripcion', Consulta = '$consulta' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: salaindex.php');
}

?>
<?php include('header.php'); ?>
<div class="container p-4">
<h2>Actualizar Sala</h2>
  <div class="row">
    <div class="col-md-4 mx-auto">
     
      <form action="salaedit.php?id=<?php echo $_GET['id']; ?>" method="POST">
       
      <div class="form-group">
        <textarea name="nombre" class="form-control"><?php echo $nombre;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="descripcion" class="form-control" ><?php echo $descripcion;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="consulat" class="form-control" ><?php echo $consulta;?></textarea>
        </div>
        
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
