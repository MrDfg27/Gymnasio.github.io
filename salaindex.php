<?php include("db.php"); ?>
<?php include('header.php'); ?>

<main class="container p-4">

<h1>Salas</h1>
<a  href="salacreate.php">
<button type="button" class="btn btn-link">Crear nueva Sala</button>
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
          $query = "SELECT * FROM sala";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Descripcion']; ?></td>
            <td><?php echo $row['Consulta']; ?></td>
            <td>
              <a href="salaedit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="saladelete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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
