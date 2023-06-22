<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="Documento.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="mi_css.css">
    <title>Document</title>
 </head>
 
<body class="body_1">


 <?php

    include 'conexion.php';

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$direccion = $_POST["direccion"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$sucursal = $_POST["sucursales"];
 

 
$sql = "INSERT INTO empleados (nombre, edad, sexo, direccion, fecha_de_nacimiento, Sucursal_id)". 
"VALUES ('".$nombre."', '".$edad."' , '".$sexo."', '".$direccion."', '".$fecha_nacimiento."', '".$sucursal."')";

?>
 
<?php
if($conexion->query($sql) === TRUE){
    echo""?>  
 
    <br><br>
    <div class="container">
      <div class="row">
            <div class="col-12">
              <div class="jumbotron">
                <h1>Registro agregado con exito</h1>               
                 <h2>A donde quieres ir:</h2><br><br>                
                        <a class="btn btn-primary" href="index.php">Inicio</a> 
                        <a class="btn btn-primary" href="registrar_empleado.php">Agregar nuevo empleado</a>
                        <a class="btn btn-primary" href="empleados.php">Consultar empleados</a>
                        <img class="d-block w-1" src="imagenes/pal.gif" alt="First slide"> 
                        <hr class="my-4">
                
              </div>
        </div>
    </div>
</div>
  
     <?php
} else { 
 
 
echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
}
 
 
$conexion->close();

 
echo "<script>

Swal.fire({
  title: '🥳Registro agragado exitosamente🥳',
  width: 600,
  padding: '3em',
  color: '#716add',
  background: '#fff url(/images/trees.png)',
  backdrop: `
    rgba(0,0,123,0.4)
    url('imagenes/gato.webp')
    left top
    no-repeat
  `
})

</script>";
?>
 </body>
 </html>
