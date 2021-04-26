<?php include("db.php"); ?> 

<?php include('header.php'); ?>

<main class="container p-4">

<h2>Crear nuevo cliente</h2>
  <div class="row">
    <div class="col-md-3">

      <!-- ADD TASK FORM --> 
      
        <form action="clientesave.php" method="POST">
        
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
        <label for="exampleFormControlInput1" class="form-label">Estado del cliente</label>
        <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="estado" >
  
  <option value="activo">Activo</option>
  <option value="Inactivo">Inactivo</option>
</select>
</div>


<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Tarifa</label>
<select name="tarifa" class="form-control" >
        <?php
        include("db.php");
        $query = "SELECT * FROM tarifas order by id";
        $result = mysqli_query($conn, $query);
        if(!$result) {
          die("Query Failed.");
        }

        while($row = mysqli_fetch_assoc($result))
        {
          $id = $row['id'];
          $nombre = $row['Meses'];
          $precio = $row['Precio'];
          $descripcion = $row['Descripcion'];
          $estado = $row['Estado'];

         ?>
         <option value="<?php echo $id; ?>"><?php echo $precio; ?></option>

         <?php

        }
        ?>
</select>

</div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Sesion UVA</label>
         <input type="text" name ="uva" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fecha de renovación</label>
         <input type="date" name="fecharenov" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Casillero</label>
         <input type="text" name ="casillero" class="form-control" id="exampleFormControlInput1">
        </div>


          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Crear">
        </form>
      
    </div>

    <!----------------------------------------------------------------------------------------------->
   
  </div>
</main>

<?php include('includes/footer.php'); ?>