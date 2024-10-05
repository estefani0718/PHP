 <?php                                                                                                                                                       

 $texto="fundamentos de programacion php ";
 $asignacion=$texto;
 $referencia=&$texto;


 echo $asignacion;
 echo " <br>";
 echo $referencia;
 /** */
 $texto ="asignacion por referencia ";
 echo " <br>";
 echo $referencia;
 echo $asignacion;