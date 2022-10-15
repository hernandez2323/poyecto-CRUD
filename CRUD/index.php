<?php   include "templates/header.php"    ?>

<?php 
include_once "model/conexion.php";
$sentencia = $bd -> query("SELECT * from paciente");
$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($persona)
?>

<div class="container">
  <div class="row">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre </th>
      <th scope="col">Edad</th>
      <th scope="col">Expediente</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($persona as $dato){
    ?>

    <tr>
      <th scope="row"><?php echo $dato->id ?></th>
      <td><?php echo $dato->nombre ?></td>
      <td><?php echo $dato->edad ?></td>
      <td><?php echo $dato->expediente ?></td>

      <td><a href="editar.php?id=<?php echo $dato->id ?>">EDITAR</td>
    </tr>

    <?php 
    }
    ?>
  </tbody>
</table>

  </div>
</div>

<div class="container">
<div class="card">
  <div class="car-header">INGRESE DATOS DE PACIENTE</div>
  <form action="registro.php" method="POST">
    <div class="mb-3">
      <label class="form-label">Nombre de paciente</label>
      <input class="form-control" type="text" placeholder="Ingrese nombre" name="inputnombre" autofocus>
    </div>
    <div class="mb-3">
      <label class="form-label">Edad</label>
      <input class="form-control" type="text" placeholder="Ingrese edad" name="inputedad" >
    </div>
    <div class="mb-3">
      <label class="form-label">Expediente</label>
      <input class="form-control" type="text" placeholder="Ingrese expediente" name="inputexpediente">
    </div>
    <input type="submit" class="btn btn-primary" value="Registrar">
    
  
  </form>
  </div>
</div>

<?php include "templates/footer.php"  ?>

