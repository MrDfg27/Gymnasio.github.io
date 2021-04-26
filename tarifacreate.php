<?php include("db.php"); ?> 

<?php include('header.php'); ?>

<main class="container p-4">
<h2>Crear nueva Tarifa</h2>
  <div class="row">
    <div class="col-md-4">
 

      <!-- ADD TASK FORM -->
      
        <form action="tarifasave.php" method="POST">
        
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Meses</label>
         <input type="text" name="meses" class="form-control" id="exampleFormControlInput1" >
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Precio</label>
         <input type="text" name="precio" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
         <input type="text" name ="descripcion" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Estado</label>
         <input type="text" name ="estado" class="form-control" id="exampleFormControlInput1">
        </div>

          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Crear">
        </form>
      
    </div>

    <!----------------------------------------------------------------------------------------------->
   
  </div>
</main>

<?php include('includes/footer.php'); ?>