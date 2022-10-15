<?php   include "templates/header.php"    ?>

<?php
include_once "model/conexion.php";

$codigopaciente = $_GET["id"];

$consulta = $bd->prepare("SELECT * from paciente where id = ?");

$consulta->execute([$codigopaciente]);

$paciente = $consulta->fetch(PDO::FETCH_OBJ);

//print_r($paciente);
?>


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
<div class="card">
  <div class="car-header">EDITAR DATOS DE PACIENTE</div>
  <form action="update.php" method="POST">
    <div class="mb-3">
      <label class="form-label">Nombre de paciente</label>
      <input class="form-control" type="text" placeholder="Ingrese nombre" 
      name="inputnombre" value=<?php echo $paciente->nombre ?> autofocus>
    </div>
    <div class="mb-3">
      <label class="form-label">Edad</label>
      <input class="form-control" type="text" placeholder="Ingrese edad" 
      name="inputedad" value=<?php echo $paciente->edad ?> >
    </div>
    <div class="mb-3">
      <label class="form-label">Expediente</label>
      <input class="form-control" type="text" placeholder="Ingrese expediente" 
      name="inputexpediente" value=<?php echo $paciente->expediente ?> >
    </div>
    <input type="hidden" name="id" value="<?php echo $paciente->id; ?>">
    <input type="submit" class="btn btn-primary" value="Editar">
    
  
  </form>
  </div>
  </div>
  </div>



<?php include "templates/footer.php"  ?>