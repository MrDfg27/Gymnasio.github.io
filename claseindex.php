<?php include("db.php"); ?>
<?php include('header.php'); ?>

<main class="container p-4">

<h1>Clases</h1>
<a  href="clasecreate.php">
<button type="button" class="btn btn-link">Crear nueva clase</button>
</a>  
<div class="row">
    <!----------------------------------------------------------------------------------------------->



    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Salas disponibles</th>
            <th>Dia</th>
            <th>Hora</th>
            <th>Actividad</th>
            <th>Empleados</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM clase";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['idsala']; ?></td>
            <td><?php echo $row['Dia']; ?></td>
            <td><?php echo $row['Hora']; ?></td>
            <td><?php echo $row['idactividad']; ?></td>
            <td><?php echo $row['idempleados']; ?></td>

            <td>
              <a href="claseedit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="clasedelete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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
