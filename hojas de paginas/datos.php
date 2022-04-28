<?php
$servername="localhost";
$username="root";
$password="";
$database="Formulario_dos";

$conexion=mysqli_connect($servername, $username, $password, $database);

if (!$conexion) { 
    echo'Error al conectarse a la base de datos';
}else//{ 
    
   // echo 'Conectado  satisfactoriamente al servidor <br> '; 
//} 

 $Nombre=$_POST["Nombre"];
 $Celular=$_POST["Celular"];
 $Correo=$_POST["Correo"];
 
 $sql= "INSERT INTO datos_dos(Nombre, Celular, Correo) VALUES ('$Nombre', '$Celular', '$Correo')";
 $resultado = mysqli_query($conexion, $sql);
 if(!$resultado){
    
    echo"Hubo algun error";
}
else{
    echo"Datos guardados Correctamente<br><a href='Formulario.html'>Volver</a>";
}

?>
