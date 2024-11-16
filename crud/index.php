<?php

require('conexion.php');
$db=new conexion();
$conexion=$db->getConexion();
$sql ="SELECT * FROM ciudad";
$bandera=$conexion -> prepare ($sql);
$bandera->execute();
$data=$bandera->fetchAll();

echo " <pre>";
print_r($ciudad);
echo " </pre>";
?>
  <form action="" method="post">
    <div>
      <label for="id_ciudad">Ciudad</label>
      <select name="ciudad_id" id="ciudad_id">
        <?php
        foreach ($ciudad as $key =>$values){
          ?> 
            <option id=" <?=$value['id']?>">
            <?=$value['nombre']?>
            </option>
          <?php
        }
        ?>
      </select>
    </div>
  </form>