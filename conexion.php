<link rel="stylesheet" href="estilos.css">
<?php
    $usuario = "root";
    $password = "";   
    $servidor = "localhost"; 
    $basededatos ="curriculum"; 
            
    $conexion = mysqli_connect  ($servidor,$usuario,$password,$basededatos);             
    mysqli_query($conexion, "insert into datos(nombre, email, asunto, mensaje) values
        ('$_REQUEST[nombre]','$_REQUEST[email]','$_REQUEST[asunto]', '$_REQUEST[mensaje]')")
        or die("Problemas en el select" . mysqli_error($connection));
    mysqli_close($conexion); 
    if ($conexion) {
        ?> 
        <h3 class = "afirmacion"> ¡Tu mensaje fue enviado!</h3>
        <?php
    } else {
        ?>
        <h3 class = "error"> ¡Algo salió mal!</h3>
        <?php
    }
?>