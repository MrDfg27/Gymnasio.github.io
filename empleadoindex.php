<?php include("db.php"); ?>
<?php include('header.php'); ?>

<main class="container p-4">

<h1>Empleados</h1>
<a  href="empleadocreate.php">
<button type="button" class="btn btn-link">Crear nuevo empleado</button>
</a>  
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
            <th>Direccion</th>
            <th>Fecha de nacimiento</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Sexo</th>
            <th>Numero de seguridad</th>
            <th>Numero cuenta seguridad</th>
            <th>CCSS</th>
            <th>Pagos</th>
            <th>Categoria profesional</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM empleado";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Cedula']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Ape1']; ?></td>
            <td><?php echo $row['Ape2']; ?></td>
            <td><?php echo $row['Direccion']; ?></td>
            <td><?php echo $row['Fechanac']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['Correo']; ?></td>
            <td><?php echo $row['Sexo']; ?></td>
            <td><?php echo $row['Numseguridad']; ?></td>
            <td><?php echo $row['Numcuentaseg']; ?></td>
            <td><?php echo $row['CCSS']; ?></td>
            <td><?php echo $row['Pagos']; ?></td>
            <td><?php echo $row['Catprofesional']; ?></td>
            <td>
            

            
            <a href="salario.php?id=<?php echo $row['id']?>?Cedula=<?php echo $row['Cedula']?>?Nombre=<?php echo $row['Nombre']?>?Ape1=<?php echo $row['Ape1']?>?Ape2=<?php echo $row['Ape2']?>" class="btn btn-primary">
            <i class="fas fa-money-check-alt"></i>    
              </a>
   
              <a href="empleadoedit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="empleadodelete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>


