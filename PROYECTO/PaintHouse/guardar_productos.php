<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="Documento.css">
    <link rel="stylesheet" href="mi_css.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
 </head>
 
<body class="body_1">


 <?php

include 'conexion.php';
 include 'menu.php'; 

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$ruta = $_POST["ruta"];
 
 
$target_dir = "subida_imagenes/"; //directorio en el que se subira
$target_file = $target_dir.basename($_FILES["imagen"]["name"]);//se añade el directorio y el nombre del archivo
$uploadOk = 1;//se añade un valor determinado en 1

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Comprueba si el archivo de imagen es una imagen real o una imagen falsa

/*if(isset($_POST["submit"])) {//detecta el boton
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {//si es falso es una imagen y si no lanza error
        echo "Archivo es una imagen- " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen";
        $uploadOk = 0;
    }
}*/


// Comprobar si el archivo ya existe
if (file_exists($target_file)) {
    echo "El archivo ya existe";
    $uploadOk = 0;//si existe lanza un valor en 0
}
// Comprueba el peso
if ($_FILES["imagen"]["size"] > 500000) {
    echo "Perdon pero el archivo es muy pesado";
    $uploadOk = 0;
}
// Permitir ciertos formatos de archivo
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Perdon solo, JPG, JPEG, PNG & GIF Estan soportados";
    $uploadOk = 0;
}
//Comprueba si $ uploadOk se establece en 0 por un error
if ($uploadOk == 0) {
    echo "Perdon, pero el archivo no se subio";
// si todo está bien, intenta subir el archivo
} else {
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
        echo "<script>
             console.log('El archivo ". basename( $_FILES["imagen"]["name"]). " Se subio correctamente') 
             </script>;";
    } else {
        echo "<script>
        console.log('error al cargar el archivo') 
        </script>;";
    
         
    }
}


$sql = "INSERT INTO productos (nombre, descripcion, precio, ruta, url)". 
"VALUES ('".$nombre."', '".$descripcion."' , '".$precio."', '".$ruta."', '".$target_file."')";

?>
 
<?php
if($conexion->query($sql) === TRUE){
    echo""?>  
 
    <br><br>
    <div class="container">
      <div class="row">
            <div class="col-12">
              <div class="jumbotron">
                <h1>Producto agregado con exito</h1>               
                 <h2>A donde quieres ir:</h2><br><br>                
                        <a class="btn btn-primary" href="index.php">Inicio</a> 
                        <a class="btn btn-primary" href="registrar_productos.php">Agregar nuevo producto</a>
                        <a class="btn btn-primary" href="productos.php">Consultar productos</a>
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

 