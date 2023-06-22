<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="Documento.css">
 

</head>
<body>

<?php
        include 'conexion.php';
        $empleados_id = $_GET["id"];


        $sql = "select empleados_id, empleados.nombre AS nombre_empleado, edad, sexo, empleados.direccion, fecha_de_nacimiento, sucursal.nombre AS nombre_sucursal, sucursal.Sucursal_id  
        from empleados 
        INNER JOIN sucursal on empleados.Sucursal_id = sucursal.Sucursal_id WHERE empleados_id=" . $empleados_id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();

        $sql2 = "select * from sucursal";
        $lista_sucursales = $conexion->query($sql2);
    ?>
      <?php include 'menu.php'; ?>
   
    
 

    <div class="container">
        <div id="border">
        <div class="row">
            <div class="col-12">
            <h1><span class="badge badge-warning"> Actualizar empleado </span></h1>


                <form method="post" action="editar_empleado.php" enctype="multipart/form-data">
                <input name="id" type="hidden" value="<?php echo $registro["empleados_id"]; ?>">
                  

                <div class="form-group">
                    <h1><span class="badge badge-secondary">Nombre</span></h1>
                        <textarea name="nombre" id="" cols="1" rows="1" class="form-control"><?php echo $registro["nombre_empleado"] ?></textarea>
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">edad</span></h1>
                        <textarea name="edad" id="" cols="1" rows="1" class="form-control"><?php echo $registro["edad"] ?></textarea>
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">sexo</span></h1>
                          <div class="form-group">
                          <?php
                        if($registro["sexo"]){
                            echo "<input type='radio' name='sexo' value='1' checked> "?><span class="badge badge-secondary">Masculino</span><br><?php
                            echo "<input type='radio' name='sexo' value='0'> "?><span class="badge badge-secondary">Femenino</span><br><?php
                        } else {
                            echo "<input type='radio' name='sexo' value='1'> "?><span class="badge badge-secondary">Masculino</span><br><?php
                            echo "<input type='radio' name='sexo' value='0' checked> "?><span class="badge badge-secondary">Femenino</span><br><?php
                        }
                    ?>

                    </div>
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Direccion</span></h1>
                        <textarea name="direccion" id="" cols="1" rows="1" class="form-control"><?php echo $registro["direccion"] ?></textarea>
                    </div>
 

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">fecha de nacimiento</span></h1>
                    <input value="<?php echo $registro["fecha_de_nacimiento"]; ?>" type="date" class="form-control" name="fecha_nacimiento">
                    </div>

                    
                    
                  
                    <div class="form-group">
                    <h1><span class="badge badge-secondary">sucursales</span></h1>
                    <select name="sucursales">
                    <?php 
                          
                          while($row = $lista_sucursales->fetch_assoc()) {
                            ?>
                         <option value="<?php echo $row["Sucursal_id"]?>" <?php if($registro["Sucursal_id"] == $row["Sucursal_id"]){
                        echo "selected";

                         } ?>><?php echo $row["nombre"]?> </option>";
                        
                           
                         <?php
                            } 
                            $conexion->close();
                            ?>
 
                                       
                               
                            </select>
                    </div>
 
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="empleados.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
     </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>

    <script src="js/jquery-3.6.1.js"></script>
     
    <script src="js/bootstrap.js"></script>
</body>
</html>