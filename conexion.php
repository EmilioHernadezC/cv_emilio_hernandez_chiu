<?php
    $usuario = "root";
    $password = "";   
    $servidor = "localhost"; 
    $basededatos ="curriculum"; 
            
    $conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos");             
    $db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");
    
    $nombre=$_POST['nombre']; 
    $correo=$_POST['email'];
    $correo=$_POST['asunto'];  
    $mensaje=$_POST['mensaje'];
  
    $sql="INSERT INTO datos VALUES ('$nombre','$correo','$mensaje')"; 
              
    $ejecutar=mysqli_query($conexion, $sql);
       
    if(!$ejecutar){
        echo"hubo algun error";
    }else{
        echo"datos guardado correctamente <br><a href='index.html'>volver</a>"; 
    }
?>