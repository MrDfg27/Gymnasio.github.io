<?php include("db.php"); ?>
<?php include('header.php'); ?>

<main class="container p-4">

<h1>Tarifas</h1>
<a  href="tarifacreate.php">
<button type="button" class="btn btn-link">Crear nueva tarifa</button>
</a>  
<div class="row">
    <!----------------------------------------------------------------------------------------------->



    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Meses</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM tarifas";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Meses']; ?></td>
            <td><?php echo $row['Precio']; ?></td>
            <td><?php echo $row['Descripcion']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td>
              <a href="tarifaedit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="tarifadelete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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
