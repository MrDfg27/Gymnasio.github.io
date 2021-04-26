<?php include('header.php'); ?>
<?php include("db.php"); ?>

<main class="container p-4">

<h1>Empleado</h1>
<div class="row">
    <!----------------------------------------------------------------------------------------------->

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
          </tr>
        </thead>
        <tbody>

          <?php
          if  (isset($_GET['id'])) {
            $id = $_GET['id'];
          $query = "SELECT Cedula, Nombre, Ape1, Ape2 FROM empleado WHERE id = '$id' ";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          
            <td><?php echo $row['Cedula']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Ape1']; ?></td>
            <td><?php echo $row['Ape2']; ?></td>
           
          
          <?php } }?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>




<form action="" method="post">
        <h3> Calcular salario</h3>
         <br>
        <label for="exampleFormControlInput1" class="form-label">Cantidad de horas trabajadas</label>
         <input type="text" name="calcular">
      

        <input type="submit"  value="calcular">
</form>

<br>

<?php 
   
    
   $horas = $_POST['calcular'];
   $preciohora = 5000;

   $rhoras = $preciohora * $horas;
   
   $extra = $horas * 1.5;    
   
   $resultado = $extra + $rhoras;
   

   echo "Total: ". $resultado; 



   
 
   if (isset($_GET['id'])) {
    $id = $_GET['id'];
   $query = "SELECT Cedula, Nombre, Ape1, Ape2 FROM empleado WHERE id = '$id' ";
   $result = mysqli_query($conn, $query);
   if(!$result) {
     die("Query Failed.");
   }

   while($row = mysqli_fetch_assoc($result))
   {
     
    $cedula =  $row['Cedula'];
    $nombre = $row['Nombre'];
    $ape1 = $row['Ape1'];
    $ape2 = $row['Ape2'];
   

  }

$query = "INSERT INTO salarios(Cedula, Nombre, Ape1, Ape2, Salario) 
    VALUES ('$cedula', '$nombre', '$ape1', '$ape2', '$resultado')";

   }



?>



