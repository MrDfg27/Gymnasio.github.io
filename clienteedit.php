<?php
include("db.php");

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM cliente WHERE id=   '".$id."' ";
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
    $estado = $row['Estadocliente'];
    $tarifa = $row['Tarifa'];
    $uva = $row['SeccionUVA'];
    $fecharenov = $row['Fecharenov'];
    $casillero = $row['Casillero'];
    
    
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
  $estado = $_POST['Estadocliente'];
  $tarifa = $_POST['Tarifa'];
  $uva = $_POST['SeccionUVA'];
  $fecharenov = $_POST['Fecharenov'];
  $casillero = $_POST['Casillero'];

  $query = "UPDATE cliente SET Cedula = '$cedula', Nombre = '$nombre', Ape1 = '$ape1', Ape2 = '$ape2', 
                              Direccion = '$direc', Fechanac = '$fecha', Telefono = '$Telefono', Correo = '$correo', 
                              Sexo = '$sexo', Estadocliente = '$estado', Tarifa = '$tarifa', SeccionUVA = '$uva', 
                             Fecharenov = '$fecharenov', Casillero = '$casillero' WHERE id = $id";
  
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: clienteindex.php');
}

?>
<?php include('header.php'); ?>
<div class="container p-4">
<h2>Actualizar cliente</h2>
  <div class="row">
    <div class="col-md-4 mx-auto">
      
      <form action="clienteedit.php?id=<?php echo $_GET['id']; ?>" method="POST">
       
      <div class="form-group">
        <textarea name="cedula" class="form-control"><?php echo $cedula;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="nombre" class="form-control"><?php echo $nombre;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="ape1" class="form-control"><?php echo $ape1;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="ape2" class="form-control" ><?php echo $ape2;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="direccion" class="form-control"><?php echo $direc;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="fecha" class="form-control"><?php echo $fecha;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="tel" class="form-control" ><?php echo $tel;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="correo" class="form-control"><?php echo $correo;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="sexo" class="form-control"><?php echo $sexo;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="estado" class="form-control"><?php echo $estado;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="tarifa" class="form-control" ><?php echo $tarifa;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="uva" class="form-control"><?php echo $uva;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="fecharenov" class="form-control"><?php echo $fecharenov;?></textarea>
        </div>

        <div class="form-group">
        <textarea name="casillero" class="form-control"><?php echo $casillero;?></textarea>
        </div>
        
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
     
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
