<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="Documento.css">
    <link rel="stylesheet" href="mi_css.css">
 

</head>
<body class="body_1">

<?php
    include 'conexion.php';
    $sql = "select * from sucursal";
    $lista_sucursales = $conexion->query($sql);

     ?>

    <?php include 'menu.php'; ?>
    <br>
    
 

    <div class="container">
        <div id="border">
        <div class="row">
            <div class="col-12">
            <h1><span class="badge badge-warning"> Registrar empleado </span></h1>
                <form method="post" action="guardar_empleado.php" enctype="multipart/form-data">
                  

                <div class="form-group">
                    <h1><span class="badge badge-secondary">Nombre</span></h1>
                        <textarea name="nombre" id="" cols="1" rows="1" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">edad</span></h1>
                        <textarea name="edad" id="" cols="1" rows="1" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">sexo</span></h1>
                          <div class="form-group">
                        <input type="radio" name="sexo" value="1"><span class="badge badge-secondary">masculino</span><br>
                        <input type="radio" name="sexo" value="0"><span class="badge badge-secondary">femenino</span>
                    </div>
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Direccion</span></h1>
                        <textarea name="direccion" id="" cols="1" rows="1" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">fecha de nacimiento</span></h1>
                    <input type="date" class="form-control" name="fecha_nacimiento">
                    </div>

                    
                    
                  
                    <div class="form-group">
                    <h1><span class="badge badge-secondary">sucursales</span></h1>
                    <select name="sucursales">
                                       
                                        <?php 
                                        if($lista_sucursales->num_rows > 0) { 
                                        
                                        while($row = $lista_sucursales->fetch_assoc()) {
                                        ?>
                                        <?php echo "<option value=".$row["Sucursal_id"].">".$row["nombre"]."</option>"; ?>
                                    
                                        <?php 
                                        } 
                                        }
                                        $conexion->close();
                                        ?>
                            </select>
                    </div>
 
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="sucursales.php" class="btn btn-danger">Cancelar</a>
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