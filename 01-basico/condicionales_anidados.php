  <?php
  /**
   * estructura 
   * if (?){
   *  if (?){
   *    codigo a ejecutar 
   * }else {
   *    codigo a ejecutar
   * }
   * 
   */

  $a=2;
  $b=3;
  $c=10;
  if ($a > $b){
   echo "mayor";
  }
  else{
    echo "menor";
  }
 echo " <br>";
  if($a > $b){

    if($a >$c){
      echo "mayor ";
    }
    if($b >$c){
      echo "mayor";
    }
    else{
      echo "menor";
  }
  }

  echo " <br>";
   //dias de la semana else if y swith 
  $dias=4;

  if ($dias==1){
    echo "lunes";
  }
  else if ($dias==2){
    echo "martes";
  }
  else if($dias==3){
    echo "miercoles";
  }
  else if ($dias==4){
    echo "jueves";
  }
  else if ($dias==5){
   echo "viernes";
  }
  else if ($dias==6){
   echo "sabado";
  }
  else if ($dias==7){
   echo "domingo";
  }

  echo " <br>";

  $semana=6;
 switch($semana){
    case 1:
      echo "lunes";
    break;
    case 2:
      echo "martes";
    break;
    case 3:
      echo "miercoles";
    break;
    case 4:
      echo "jueves";
    break;
    case 5:
      echo "viernes";
    break;
    case 6:
      echo "sabado";
    break;
     case 7:
      echo "domingo";
    break;
  }