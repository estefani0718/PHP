<?php
require('conexion.php');
$db=new conexion();
$conexion=$db->getConexion();
$sql ="SELECT * FROM Usuarios";
$bandera=$conexion -> prepare ($sql);
$bandera->execute();
$Usuarios=$bandera->fetchAll();

?>
<?php
$sql ="SELECT * FROM Ciudades";
$bandera=$conexion -> prepare ($sql);
$bandera->execute();
$ciudades=$bandera->fetchAll();

?>

<?php
$sql ="SELECT * FROM Generos";
$bandera=$conexion -> prepare ($sql);
$bandera->execute();
$Generos=$bandera->fetchAll();
?>
<?php
$sql ="SELECT * FROM lenguajes";
$bandera=$conexion -> prepare ($sql);
$bandera->execute();
$lenguajes=$bandera->fetchAll();

?>

  <form action="controlador.php" method="post" class="contenedor__formulario">
    <link rel="stylesheet" href="style.css">
    <h1>FORMULARIO</h1>
   <div>
    <label for="" name="nombre">Nombre</label>
    <input type="text" name="nombre">
   </div>
    <div>
      <label for="" name="apellido">Apellido</label>
      <input type="text" name="apellido">
    </div>
    <div>
      <label for="" name="correo">Correo</label>
      <input type="email" name="correo">
    </div>
    <div>
      <label for="" name="fecha_nacimiento">Fecha nacimiento</label>
      <input type="text" name="fecha_nacimiento">
    </div>
    <div>
      <h3>Seleciona tu ciudad :</h3>
      <label for="id_ciudades">Ciudad </label>
      <select name="id_ciudades" id="id_ciudades">
        <?php
        foreach ($ciudades as $key =>$values){
          ?> 
            <option id="<?=$values['id_ciudades']?>" value="<?=$values['id_ciudades']?>" >
            <?=$values['nombre_ciudades']?>
            </option>
          <?php
        }
        ?>
      </select>
    </div>
    <div>
      <h3>Selecciona tu genero:</h3>
      <label for="id_genero">Genero: 
        <?php
        foreach ($Generos as $key =>$values){
          ?> 
          <div>
          <label for="<?=$values['id_genero']?>">
            <?=$values['nombre_genero']?>
          </label>
          <input type="radio" id="<?=$values['id_genero']?>" name="id_genero">
          </div>
          <?php
        }
        ?>
      </label>

    </div>
    <div>
      <h3>Seleciona el lenguaje de programacion de tu preferencia y comodidad: </h3>
        <?php
        foreach ($lenguajes as $key =>$values){
          ?> 
          <div>
            <label for="<?=$values['id_lenguaje']?>" >
              <?=$values['nombre_lenguaje']?>
             
            </label>
            <input type="checkbox" id="<?=$values['id_lenguaje']?>" value="<?=$values['id_lenguaje']?>" name="id_lenguaje[]">
        </div>
          <?php
        }
        ?>
    </div>
    <div>
     <button type="submit" >Guardar</button>
    </div>
  </form>
