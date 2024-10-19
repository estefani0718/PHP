 <?php

 /**
  * Estructura condicional dole (if - else)
  * if (expresion){
  *  codigo a ejecutar si la expresion es verdadera 
  *} else {
  * codicion es falsa 
  *}
  * if (expresion):
  * si es verdadera
  * else: 
  * si es falsa
  * endfi; 
  *
  */
if (1>7){
  echo"condiciona evalua a verdadera ";
 }else{
   echo"condicion evalua a falsa ";
}
echo " <br>";
if (9==12):
    echo "condicion evaua a verdadero";
  else:
    echo"condicion evalua a falsa ";
  endif;
echo " <br>";

  // calcular el total que una  persona debe pagar en un monta llantas,el precio de cada llanta es de 800 ,si se compra menos de 5 llantas y de 700 si se compra 5 o mas llantas.

 echo " <br>";
 $llanta=4;
 if ($llanta  >= 5 ){
   $llanta = 700*$llanta;
   echo "valor de cada llanta de 700". $llanta;
  
  
  }else{
   $llanta =800*($llanta);
   echo "valor de cada llanta de 800: ".$llanta;
  }
  
  //determinar un alumno aprueba o reprueba un curso , sabiendo que aprobara si su promedio de tres calificaciones , el promedio debe ser 3.0 ,caso contario reprueba.
  
echo " <br>";
  $cal1=2.0;
  $cal2=3.0;
  $cal3=4.0;
echo " <br>";
  $total=($cal1+$cal2+$cal3)/3;
  if ($total>=3.0){
   echo "aprobado";
  }
  else{
    echo "reprueba ";
  }
echo " <br>";
  echo " <hr>  <br>";
 // (8  >10) ? echo "verdadero" : echo "falso";

echo " <br>";

/**
 * operador ternario 
 * operdador ? true : false 
 */

 $val=3;
 $val2=5;

echo  ($val > $val2) ? $val*$val2 : $val / $val2;

echo " <br>";
//

echo " <br>";
echo " <br>";