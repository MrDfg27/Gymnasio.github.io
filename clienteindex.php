<?php include("db.php"); ?>
<?php include('header.php'); ?>

<main class="container p-4">

<h1>Clientes</h1>
<a  href="clientecreate.php">
<button type="button" class="btn btn-link">Crear nuevo cliente</button>
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
            <th>Estado cliente</th>
            <th>Tarifa</th>
            <th>Sesion UVA</th>
            <th>Fecha de renovacion</th>
            <th>Casillero</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM cliente";
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
            <td><?php echo $row['Estadocliente']; ?></td>
            <td><?php echo $row['Tarifa']; ?></td>
            <td><?php echo $row['SeccionUVA']; ?></td>
            <td><?php echo $row['Fecharenov']; ?></td>
            <td><?php echo $row['Casillero']; ?></td>
            <td>
              <a href="clienteedit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="clientedelete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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
