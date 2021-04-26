<?php include("db.php"); ?>
<?php include('header.php'); ?>

<main class="container p-4">

<h1>Historial de salarios</h1>

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
            <th>Salario</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM salarios";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Cedula']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Ape1']; ?></td>
            <td><?php echo $row['Ape2']; ?></td>
            <td><?php echo $row['Salario']; ?></td>
            <td>
            
              <a href="salariodelete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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