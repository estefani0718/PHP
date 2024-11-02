 <?php
//evalua una condicion y permite ejecutar un fragmento de codigo
 /**
  *estructura condicional simple  
  *if(expresion){
  * condicion a ejecutar   
  * }
  *if (expresion):
  *  codigo a ejecutar 
  * endif;
  *
  */

  $edad=18;
 $saludo="hola viejito ";
 if ($edad>=18){
  echo "Hola persona mayor de edad(viejito) ";
  }
 echo " <br>";
?>

<div>
  <?php if($edad >=18): ?> 
    <h1> 
       <?=$saludo ?>
    </h1>
 <?php endif; ?>
</div>

<!-- realizar un fragma que pida un numero que si es par , tiene que apareer un mensaje que el numero es par  -->
 <?php
$variable= 9;
$mensaje="numero par";
?>
<div>
  <?php if(($variable%2)==0): ?> 
    <h1> 
       <?=$mensaje?>
    </h1>
 <?php endif; ?>
</div>
    <!-- en un almacen se hace un 20% de descuento a los clientes , cuya compra supere los 100$ ,cual sera la cantidad que pagara una persona por su compra  -->
<?php
$variable= 120;
$mensaje="descuento 20%";
?>
<div>
  <?php if($variable >100):
    $re=20/100;
    $resultado=$variable-($variable*$re);
    var_dump($resultado);
    ?> 
    <h1> 
       <?=$mensaje?>
    </h1>
 <?php endif; ?>
</div>




