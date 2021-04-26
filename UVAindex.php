<?php include("db.php"); ?>
<?php include('header.php'); ?>

<main class="container p-4">

<h1>Sesiones UVA disponibles</h1>
<div class="row">
    <!----------------------------------------------------------------------------------------------->



    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Disponible</th>
            <th>Precio</th>
            <th>Historial</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM uva";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Disponible']; ?></td>
            <td><?php echo $row['Precio']; ?></td>
            <td><?php echo $row['Historial']; ?></td>
            
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
