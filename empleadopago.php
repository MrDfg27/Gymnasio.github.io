<?php include("db.php"); ?>
<?php include('header.php'); ?>

<main class="container p-4">


<form  >
        <h3> Calcular salario</h3>
         <br>
        <label for="exampleFormControlInput1" class="form-label">Cantidad de horas trabajadas</label>
         <input type="text" name="calcular">
      

        <input type="submit" name="save_task"  value="calcuar">
</form>



<?php    
    
    $horas = is_numeric('calcular');
    $preciohora = 5000;

    $rhoras = $preciohora * $horas;
    
    $extra = $horas * 1.5;    
    
    $resultado = $extra + $rhoras;

    print "Total: ". $resultado; 

    header('Location: calculopago.php');


?>           
     

</main>

<?php include('includes/footer.php'); ?>