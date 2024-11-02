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













 //texto ="el gato de piedra en la gotica  pueta de gestiboro goot";
 //$expresion="/g.t/";
