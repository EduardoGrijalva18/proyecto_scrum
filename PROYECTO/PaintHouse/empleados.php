<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="Documento.css">
    <link rel="stylesheet" href="tablas.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

    <?php
      include 'conexion.php';
      $sql = "select empleados_id, empleados.nombre AS nombre_empleado, edad, sexo, empleados.direccion, fecha_de_nacimiento, sucursal.nombre AS nombre_sucursal 
      from empleados 
      INNER JOIN sucursal on empleados.Sucursal_id = sucursal.Sucursal_id";
      $datos = $conexion->query($sql);
     

    ?>

    <?php include 'menu.php'; ?>
    <br>

    <center><a href="registrar_empleado.php" class="btn btn-primary">Registrar Empleado</a></center><br>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID del empleado</th>
                            <th>nombre</th>
                            <th>edad</th>
                            <th>sexo</th>
                            <th>direccion de vivienda</th>
                            <th>fecha de nacimiento</th>
                            
                            
                             
                            
                            
                    </thead>
                    <tbody>
                      <?php if($datos->num_rows > 0) { 

                          while($row = $datos->fetch_assoc()) {
                      ?>
                        <tr>
                            <td><?php echo $row["empleados_id"]; ?></td>
                            <td><?php echo $row["nombre_empleado"]; ?></td>
                            <td><?php echo $row["edad"]; ?></td>
                            <td><?php echo $row["sexo"]; ?></td>
                            <td><?php echo $row["direccion"]; ?></td>
                            <td><?php echo $row["fecha_de_nacimiento"]; ?></td>
                         
                            <td>
                          
                                <a href="actualizar_empleados.php?id=<?php echo $row["empleados_id"]; ?>" class="btn btn-primary">Editar</a>
                                <a href="eliminar_empleado.php?id=<?php echo $row["empleados_id"]; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                      <?php 
                      } 
                    }
                    $conexion->close();
                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>

<?php
    echo "<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'consultar Pintores',
  showConfirmButton: false,
  timer: 1500
})
</script>";
?>

</body>
</html>