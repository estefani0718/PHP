 <?php
 
//  $exp="/PRUEBA/i";
//  $exp="/[0-9]/";
//  $exp="/^texto/i"; 
//  $exp="/pr[eu]eba/i"; 
//  $exp="/grupo-[0-9]-adso/i"; 
//  $exp="/le{2,4}r/"; 
//  $exp="/l[a,e,i,o,u]{2,4}r/"; 
//  $exp="/[0-9]/"; 
//  $exp="/[a-z]/"; 
//  $exp="/[A-Z]/"; 
//  $exp="/[\d]/"; 
//  preg_match_all($exp,$texto,$concidencias);
//  echo " <pre>";
//  print_r($concidencias);
//  echo" </pre>";

 $texto="grupo 2894667  de ADSOW";
//  $exp="/[A-Z]{2,4}/"; 
//  $exp="/[0-9]{2,}/"; 
 $exp="/([[0-9{2,}])\s([[A-Z{4,}])/"; 
 $resultado=preg_match_all($exp, $texto, $concidencias, PREG_OFFSET_CAPTURE);

 echo " <pre>";
 print_r($concidencias);
 echo" </pre>";

if($resultado){
 echo "si tiene numeros ";
}
else{
  echo "no tiene numeros";
}

$text= "Aa1#Bb2%";
// $exp = "/gruPO-[0-9]-ADso/i";
// $exp = "/le{1,4}r/i";
// $exp = "/le[aeiou]{1,5}r/i";
$exp = "/((?=.*[A-Z]){2,}(?=.*[a-z]){1,}(?=.*[0-9]){2,}(?=.*\W){2,})(?=.*.){8,}/";


$resul= preg_match($exp, $text, $coincidencia,PREG_OFFSET_CAPTURE);

echo "<pre>";
print_r($coincidencia);
echo "<br>";
echo 3<$resul;
echo "<br>";
if ($resul){
    print("si se valida la password");
}else{

    print("no hay suficiente seguridad");
}
echo "<pre>";












 //texto ="el gato de piedra en la gotica  pueta de gestiboro goot";
 //$expresion="/g.t/";
