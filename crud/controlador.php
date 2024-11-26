 <?php
//  echo" <pre>";
//  print_r($_REQUEST);
//  echo" </pre>";
require('conexion.php');
$db=new conexion();
$conexion=$db->getConexion();
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$fecha_nacimiento=$_POST["fecha_nacimiento"];
$id_ciudades=$_POST["id_ciudades"];
$id_genero=$_POST["id_genero"];
$lenguajes=$_POST["id_lenguaje"];

$sql ="INSERT INTO Usuarios (nombre,apellido,correo,fecha_nacimiento,id_genero,id_ciudades) 
VALUES (:nombre,:apellido,:correo,:fecha_nacimiento,:id_genero,:id_ciudades)";

$stm=$conexion->prepare($sql);

$stm->bindParam(":nombre",$nombre);
$stm->bindParam(":apellido",$apellido);
$stm->bindParam(":correo",$correo);
$stm->bindParam(":fecha_nacimiento",$fecha_nacimiento);
$stm->bindParam(":id_ciudades",$id_ciudades);
$stm->bindParam(":id_genero",$id_genero);

$Usuarios=$stm->execute();
$id_usuario=$conexion->lastInsertId();

$sql="INSERT INTO lenguajes_usuarios (id_usuario,id_lenguaje) VALUES (:id_usuario, :id_lenguaje)";
$stm=$conexion->prepare($sql);
foreach($lenguajes as $key =>$values)
{
    $stm->bindParam(":id_usuario",$id_usuario);
    $stm->bindParam(":id_lenguaje",$values);
    $lenguajes_usuarios=$stm->execute();

}
header("Location:usuarios.php");
?>

 