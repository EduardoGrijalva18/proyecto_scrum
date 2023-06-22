<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="Documento.css">
    
     
</head>
<body>
    <?php
        include 'conexion.php';
        $productos_id = $_GET["id"];
        $sql = "SELECT * FROM productos WHERE Productos_id=" . $productos_id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <button type="button" class="btn btn-warning"><h1>Actualizar oferta</h1><hr></button>
                 
                <form method="post" action="editar_productos.php" enctype="multipart/form-data">
                    <input name="id" type="hidden" value="<?php echo $registro["Productos_id"]; ?>">
                   
                    
                        <input type="hidden"  name="nombre_imagen" value="<?php echo $registro["url"] ?>"> 
                         </input>

                         <div class="form-group">
                    <h1><span class="badge badge-secondary">Nombre</span></h1>
                        <textarea name="nombre" id="" cols="1" rows="1" class="form-control"><?php echo $registro["nombre"] ?></textarea>
                    </div>

                 
                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Descripcion</span></h1>
                        <textarea name="descripcion" id="" cols="30" rows="10" class="form-control"><?php echo $registro["descripcion"] ?>
                        </textarea>
                    </div>



                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Precio</span></h1>
                        <input value="<?php echo $registro["precio"] ?>" type="number" class="form-control" name="precio" placeholder="Teclea el precio">
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Ruta</span></h1>
                        <textarea name="ruta" id="" cols="30" rows="10" class="form-control"><?php echo $registro["descripcion"] ?>
                        </textarea>
                    </div>



                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Imagen</span></h1>
                    <img src= "<?php echo $registro['url']; ?>" alt="" width="200" height="200" value="<?php echo $registro['url']; ?>" name="nombre_imagen">
                        <input type="file" class="form-control" name="imagen" placeholder="Teclea el nombre">
                    </div>

                                    
                  
 
                   
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="productos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>

  <?php
  
  
 
  ?>

</body>
</html>
