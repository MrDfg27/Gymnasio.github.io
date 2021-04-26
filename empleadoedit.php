<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM empleado WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    $cedula = $row['Cedula'];
    $nombre = $row['Nombre'];
    $ape1 = $row['Ape1'];
    $ape2 = $row['Ape2'];
    $direc = $row['Direccion'];
    $fecha = $row['Fechanac'];
    $tel = $row['Telefono'];
    $correo = $row['Correo'];
    $sexo = $row['Sexo'];
    $numseg = $row['Numseguridad'];
    $numcuen = $row['Numcuentaseg'];
    $ccss = $row['CCSS'];
    $pagos = $row['Pagos'];
    $pro = $row['Catprofesional'];
    
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $cedula = $_POST['Cedula'];
  $nombre = $_POST['Nombre'];
  $ape1 = $_POST['Ape1'];
  $ape2 = $_POST['Ape2'];
  $direc = $_POST['Direccion'];
  $fecha = $_POST['Fechanac'];
  $tel = $_POST['Telefono'];
  $correo = $_POST['Correo'];
  $sexo = $_POST['Sexo'];
  $numseg = $_POST['Numseguridad'];
    $numcuen = $_POST['Numcuentaseg'];
    $ccss = $_POST['CCSS'];
    $pagos = $_POST['Pagos'];
    $pro = $_POST['Catprofesional'];
  $query = "UPDATE empleado set Cedula = '$cedula', Nombre = '$nombre', Ape1 = '$ape1', Ape2 = '$ape2', 
                              Direccion = '$direc', Fechanac = '$fecha', Telefono = '$Telefono', Correo = '$correo', 
                              Sexo = '$sexo', Numseguridad = '$numseg', Numcuentaseg = '$numcuen', CCSS = '$ccss', Pagos = '$pagos', Catprofesional = '$pro' WHERE id=$id";
  
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: empleadoindex.php');
}

?>
<?php include('header.php'); ?>
<div class="container p-4">
<h2>Actualizar Empleado</h2>
  <div class="row">
    <div class="col-md-4 mx-auto">
      
      <form action="empleadoedit.php?id=<?php echo $_GET['id']; ?>" method="POST">
       
      <div class="form-group">
        <textarea name="cedula" class="form-control" ><?php echo $cedula;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="nombre" class="form-control"><?php echo $nombre;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="ape1" class="form-control" ><?php echo $ape1;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="ape2" class="form-control"><?php echo $ape2;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="direccion" class="form-control"><?php echo $direc;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="fecha" class="form-control" ><?php echo $fecha;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="tel" class="form-control"><?php echo $tel;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="correo" class="form-control" ><?php echo $correo;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="sexo" class="form-control" ><?php echo $sexo;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="numseg" class="form-control"><?php echo $numseg;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="numcuen" class="form-control"><?php echo $numcuen;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="ccss" class="form-control" ><?php echo $ccss;?></textarea>
        </div>


        <div class="form-group">
        <textarea name="pagos" class="form-control"><?php echo $pagos;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="pro" class="form-control"><?php echo $pro;?></textarea>
        </div>
        
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
