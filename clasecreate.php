<?php include("db.php"); ?> 

<?php include('header.php'); ?>

<main class="container p-4">
<h2>Crear nueva clase</h2>
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      
        <form action="clasesave.php" method="POST">
        
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Salas</label>
        <select name="sala" class="form-control" >
        <?php
        include("db.php");
        $query = "SELECT * FROM sala order by id";
        $result = mysqli_query($conn, $query);
        if(!$result) {
          die("Query Failed.");
        }

        while($row = mysqli_fetch_assoc($result))
        {
          $id = $row['id'];
          $nombre = $row['Nombre'];
          $descripcion = $row['Descripcion'];
          $consulta = $row['Consulta'];

         ?>
         <option value="<?php echo $id; ?>"><?php echo $nombre; ?></option>

         <?php

        }
        ?>
</select>
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Dia</label>
         <input type="date" name="dia" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Hora</label>
         <input type="time" name ="hora" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Actividades</label>
        <select name="actividad" class="form-control" >
        <?php
        include("db.php");
        $query = "SELECT * FROM actividad order by id";
        $result = mysqli_query($conn, $query);
        if(!$result) {
          die("Query Failed.");
        }

        while($row = mysqli_fetch_assoc($result))
        {
          $id = $row['id'];
          $nombre = $row['Nombre'];
          $descripcion = $row['Descripcion'];
          $consulta = $row['Consulta'];

         ?>
         <option value="<?php echo $id; ?>"><?php echo $nombre; ?></option>

         <?php

        }
        ?>
</select>
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Empleado</label>
        <select name="actividad" class="form-control" >
        <?php
        include("db.php");
        $query = "SELECT * FROM actividad order by id";
        $result = mysqli_query($conn, $query);
        if(!$result) {
          die("Query Failed.");
        }

        while($row = mysqli_fetch_assoc($result))
        {
          $id = $row['id'];
          $nombre = $row['Nombre'];
          $descripcion = $row['Descripcion'];
          $consulta = $row['Consulta'];

         ?>
         <option value="<?php echo $id; ?>"><?php echo $nombre; ?></option>

         <?php

        }
        ?>
</select>
        </div>

          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Crear">
        </form>
      
    </div>

    <!----------------------------------------------------------------------------------------------->
   
  </div>
</main>

<?php include('includes/footer.php'); ?>