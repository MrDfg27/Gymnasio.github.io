<?php include("db.php"); ?> 

<?php include('header.php'); ?>

<main class="container p-4">
<h2>Crear nueva Actividad</h2>
  <div class="row">
    <div class="col-md-4">


      <!-- ADD TASK FORM -->
      
        <form action="actividadsave.php" method="POST">
        
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
         <input type="text" name="Nombre" class="form-control" id="exampleFormControlInput1" >
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
         <input type="text" name="Descripcion" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Consulta</label>
         <input type="text" name ="Consulta" class="form-control" id="exampleFormControlInput1">
        </div>

          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Crear">
        </form>
      
    </div>

    <!----------------------------------------------------------------------------------------------->
   
  </div>
</main>

<?php include('includes/footer.php'); ?>