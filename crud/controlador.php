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

$sql ="INSERT INTO Usuarios (nombre,apellido,correo,fecha_nacimiento,id_genero,id_ciudad) 
VALUES (:nombre,:apellido,:correo,:fecha_nacimiento,:id_genero,:id_ciudades)";

$stm=$conexion->prepare($sql);

$stm->bindParam(":nombre",$nombre);
$stm->bindParam(":apellido",$apellido);
$stm->bindParam(":correo",$correo);
$stm->bindParam(":fecha_nacimiento",$fecha_nacimiento);
$stm->bindParam(":id_ciudades",$id_ciudades);
$stm->bindParam(":id_genero",$id_genero);


$id_usuario=$conexion->lastInsertId();

foreach($lenguajes as $key =>$values)
{
    // $sql="INSERT INTO lenguajes_usuarios (id_usuario,id_lenguaje) VALUES (:id_usuario,:id_lenguaje)";
    // $stm->bindParam("id_usuario",$id_usuario);
    // $stm->bindParam("id_lenguaje",$id_lenguaje);

   var_dump($key);
   echo " <br>";
   var_dump($values);
}