 <?php



// if (isset($_REQUEST['numero'])&& !empy ($_REQUEST['numero'])){
// echo " se ingreso los datos ";
// for ($i=0; $i< $_REQUEST['numero'] ; $i++){
//  echo " <br> $i" ;
//  }
// }else{
//  echo " <h1>no se ingreso los datos </h1> ";
// }



print_r( $_REQUEST['checkbox']);


$nombre="";
$apellido="";
$edad="";
$telefono="";
$errores=[];
if (iseet($_REQUEST['nombre']) && empty($_REQUEST['nombre'])) {
  array_push($errores,"campo nombre es requerido");
}
if (iseet($_REQUEST['apellido'])&& empty($_REQUEST['apellido'])){
  array_push($errores,"campo nombre es requerido ");
}
if (iseet($_REQUEST['edad'])&& empty($_REQUEST['edad'])){
  array_push($errores,"campo nombre es requerido ");
}
if (iseet($_REQUEST['telefono'])&& empty($_REQUEST['telefono'])){
  array_push($errores,"campo nombre es requerido ");
}

echo " <ul>";
 for ($i=0; $i  < count($errores);$i++){
  echo " <li>". $errores[$i]."</li>";
 }
echo " </ul>";
 <?php



// if (isset($_REQUEST['numero'])&& !empy ($_REQUEST['numero'])){
// echo " se ingreso los datos ";
// for ($i=0; $i< $_REQUEST['numero'] ; $i++){
//  echo " <br> $i" ;
//  }
// }else{
//  echo " <h1>no se ingreso los datos </h1> ";
// }



print_r( $_REQUEST['checkbox']);


$nombre="";
$apellido="";
$edad="";
$telefono="";
$errores=[];
if (iseet($_REQUEST['nombre']) && empty($_REQUEST['nombre'])) {
  array_push($errores,"campo nombre es requerido");
}
if (iseet($_REQUEST['apellido'])&& empty($_REQUEST['apellido'])){
  array_push($errores,"campo nombre es requerido ");
}
if (iseet($_REQUEST['edad'])&& empty($_REQUEST['edad'])){
  array_push($errores,"campo nombre es requerido ");
}
if (iseet($_REQUEST['telefono'])&& empty($_REQUEST['telefono'])){
  array_push($errores,"campo nombre es requerido ");
}

echo " <ul>";
 for ($i=0; $i  < count($errores);$i++){
  echo " <li>". $errores[$i]."</li>";
 }
echo " </ul>";
