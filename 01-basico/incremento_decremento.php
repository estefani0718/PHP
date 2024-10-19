 <?php

 /**
  *  operadores de incremento y decremento 
  * simbolo              nombre 
  * ++                    Incremento 
  * --                    decremento 
  * ejemplo 
  * ++$variable             pre-incremento 
  *--$variable             pre-decremento
  */


$numero=10;

//la variable se pre incrementa para luego utilizarla y luego realiza la operacion.
echo "pre incremento".++$numero;

echo " <br>";
//primero realiza  la operacion y luego incrementa .++ unario.
echo " post incremento ".$numero++;

 echo " <br>";
 echo $numero;
 echo " <br>";

 //primeroo resta la operacion  y luego realiza la operacion
echo "pre decremento ".--$numero;

// primero realiza la operacipon y luego decrementa
echo "post decremento ".$numero--;

echo " <br>";

//primero pre incremento y luego asigna  a la nueva variable 
//10 + 1 = 11

$resultado=++$numero;
echo $resultado;

echo " <br>";

//primero lo asigna el valor a la nueva variable y luego lo incrementa.
//operador unario 
$resultado=$numero++;
echo  "".$resultado;
echo " <br>";
$resultado=--$numero;

echo " <br>";

$resultado=$numero--;
 