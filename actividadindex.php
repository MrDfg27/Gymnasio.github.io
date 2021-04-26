<?php include("db.php"); ?>
<?php include('header.php'); ?>

<main class="container p-4">

<h1>Actividades</h1>
<a  href="actividadcreate.php">
<button type="button" class="btn btn-link">Crear nueva actividad</button>
</a>  
<div class="row">
    <!----------------------------------------------------------------------------------------------->



    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre actividad</th>
            <th>Descripcion</th>
            <th>Consulta</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM actividad";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Descripcion']; ?></td>
            <td><?php echo $row['Consulta']; ?></td>
            <td>
              <a href="actividadedit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="actividaddelete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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
