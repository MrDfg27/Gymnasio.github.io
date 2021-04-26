<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM clase WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    $sala = $row['idsala'];
    $dia = $row['Dia'];
    $hora = $row['Hora'];
    $actividad = $row['idactividad'];
    $empleado = $row['idempleados'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $sala = $_POST['idsala'];
  $dia = $_POST['Dia'];
  $hora = $_POST['Hora'];
  $actividad = $_POST['idactividad'];
  $empleado = $_POST['idempleados'];

  $query = "UPDATE clase set idsala = '$sala', Dia = '$dia', hora = '$hora', idactividad = '$actividad', idempleados = '$empleado' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: claseindex.php');
}

?>
<?php include('header.php'); ?>

<div class="container p-4">
<h2>Actualizar clase</h2>
  <div class="row">
    <div class="col-md-4 mx-auto">
      
      <form action="claseedit.php?id=<?php echo $_GET['id']; ?>" method="POST">
       
        <div class="form-group">
        <textarea name="sala" class="form-control"><?php echo $sala;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="dia" class="form-control"><?php echo $dia;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="hora" class="form-control"><?php echo $hora;?></textarea>
        </div>
        
        <div class="form-group">
        <textarea name="actividad" class="form-control"><?php echo $actividad;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="empleado" class="form-control"><?php echo $empleado;?></textarea>
        </div>


        <button class="btn-success" name="update">
        Actualizar
</button>
      </form>
     
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
