<?php include("db.php"); ?> 

<?php include('header.php'); ?>

<main class="container p-4">
<h2>Crear nuevo Empleado</h2>
<div class="row">
    <div class="col-md-4">


      <!-- ADD TASK FORM --> 
      
        <form action="empleadosave.php" method="POST">
        
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cedula</label>
         <input type="text" name="cedula" class="form-control" id="exampleFormControlInput1" >
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
         <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Primer Apellido</label>
         <input type="text" name ="ape1" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Segundo Apellido</label>
         <input type="text" name="ape2" class="form-control" id="exampleFormControlInput1" >
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Direccion</label>
         <input type="text" name="direccion" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fecha de nacimiento</label>
         <input type="date" name ="fecha" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Numero de telefono</label>
         <input type="text" name="tel" class="form-control" id="exampleFormControlInput1" >
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Correo electronico</label>
         <input type="text" name="correo" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Sexo</label>
         <input type="text" name ="sexo" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Numero de seguridad</label>
         <input type="text" name="numseg" class="form-control" id="exampleFormControlInput1" >
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Numero de cuenta seguridad</label>
         <input type="text" name="numcuent" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">CCSS</label>
         <input type="text" name ="ccss" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Pago</label>
         <input type="text" name ="pagos" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Categoria profesional</label>
        <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="catpro" >
  
  <option value="activo">Profesor(a)</option>
  <option value="Inactivo">Asistente administrativo</option>
</select>
        </div>

          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Crear">
        </form>
      
    </div>

    <!----------------------------------------------------------------------------------------------->
   
  </div>
</main>

<?php include('includes/footer.php'); ?>