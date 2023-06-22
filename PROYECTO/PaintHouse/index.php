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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
   
 
</head>
<body  class="body_1"> 
    <?php include 'menu.php'; ?>
    <br>

    
    <?php
      include 'conexion.php';
      $sql = "select * from ofertas";
      $datos = $conexion->query($sql);
    ?>

  </div>

  

  
   
  
 


<div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
    <?php if($datos->num_rows > 0) { 
        $contador = 0;
        
      while($row = $datos->fetch_assoc()) {
        $contador = $contador + 1;
        ?>   
        <div class="carousel-item <?php if($contador == 1){
          echo "active";
        } ?>">
         <div class="card">
                <div class="img-wrapper"><img src="<?php echo $row["url"]; ?>" class="d-block w-100" alt="<?php echo $row["descripcion"]; ?>"> </div>
                <div class="card-body">
                    <h5 class="card-title">Ofertas</h5>
                    <p class="card-text">Clik aqui para agregar ofertas</p>
                    <a href="consultarDatos.php" class="btn btn-primary">Ofertas</a>
                </div>
            </div>
        </div>
      <?php 
      } 
      }
      $conexion->close();
      ?> 

      
   

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
 


<div id="carouselExampleControls_2" class="carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card">
                <div class="img-wrapper"><img src="fondos/dis.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Diseños</h5>
                    <p class="card-text">Ven a qui y mira nuestros diseños</p>
                    <a href="sucursales.php" class="btn btn-primary">Clik aqui</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <div class="img-wrapper"><img src="fondos/ofertas.png" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Ofertas</h5>
                    <p class="card-text">Ver todas las ofertas</p>
                    <a href="consultarDatos.php" class="btn btn-primary">Clik aqui</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <div class="img-wrapper"><img src="fondos/empleados.png" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Empleados</h5>
                    <p class="card-text">Ver todos los empleados</p>
                    <a href="empleados.php" class="btn btn-primary">Clik aqui</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <div class="img-wrapper"><img src="fondos/ss.png" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Productos</h5>
                    <p class="card-text">Ver todos los productos</p>
                    <a href="productos.php" class="btn btn-primary">Clik aqui</a>
                </div>
            </div>
        </div>


    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls_2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls_2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


 





  
 

    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>


    <script src="js/bootstrap.js"></script>
   <script>
    Swal.fire({
  title: '<strong>Terminos y<u> condiciones</u> de Painthouse®</strong>',
  icon: 'info',
  html:
    'Holas por favor acepta nuestros terminos y<b> condiciones.</b>, ' +
    '<a href="terminos.php">Terminos y condiciones</a> ' +
    'de Painthouse®',
  showCloseButton: true,
  showCancelButton: true,
  focusConfirm: false,
  confirmButtonText:
    '<i class="fa fa-thumbs-up">Aceptar</i> ',
  confirmButtonAriaLabel: '',
  cancelButtonText:
    '<i class="fa fa-thumbs-down">No gracias</i>',
  cancelButtonAriaLabel: 'Thumbs down'
})
   </script>
  
    <?php
    
    
echo "<script>
 

Swal.fire({
  title: '<strong>HTML <u>example</u></strong>',
  icon: 'info',
  html:
    'You can use <b>bold text</b>, ' +
    '<a href='//sweetalert2.github.io'>links</a> ' +
    'and other HTML tags',
  showCloseButton: true,
  showCancelButton: true,
  focusConfirm: false,
  confirmButtonText:
    '<i class='fa fa-thumbs-up'></i> Great!',
  confirmButtonAriaLabel: 'Thumbs up, great!',
  cancelButtonText:
    '<i class='fa fa-thumbs-down'></i>',
  cancelButtonAriaLabel: 'Thumbs down'
})

</script>";
?>
      


    
      <script src="js/jquery-3.6.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="mi_js.js"></script>



   
    
  </body>
</html>
 
  