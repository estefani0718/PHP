 <?php
 /**
  *combinar dos comparacion 
  * ------simbolo ------------nombre-------
  *       and                 and(y)
  *       or                  or(o)
  *       !                   not(no)
  *       &&                  and(y)
  *       ||                  or(o)
  *
  *---------tabla de operadores AND ---------
  * exprecion 1              exprecion 2           resultado 
  * false           &&        false                false
  * false          &&         true                 false
  * true           &&         true                 true
  * true           &&         false                false
  */
$valor1=7;
$valor2=2;

var_dump($valor1==7 && 2 > 3);
echo " <br>";
var_dump($valor2==7 && 9 >3);
echo " <br>";
/**
 * -------tabla de operador OR 
 * exprecion 1                 expresion 2               resultado 
 * false            ||         false                     false
 * false            ||         true                      true 
 * true             ||         false                     true 
 * true             ||         true                      true 
 * 
 */

var_dump($valor1==7 or 2>3);
echo " <br>";
var_dump($valor1==5 || 9>3 );
echo " <br>";
var_dump($valor1==5 || 1>3);

/**
 * ---------tabla del operador not------
 * exprecion!             resultado
 * !false                 true
 * !true                  false
 * 
 * 
 */
var_dump($valor1 >= $valor1);