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

  <form action="controlador.php" method="post" class="contenedor__formulario" autocomplete="off">
    <link rel="stylesheet" href="style.css">
    <h1 class="formulario__title">FORMULARIO</h1>
   <div class="formulario__elements">
      <label for="" name="nombre" class="formulario__elements-label">Nombre
      <input type="text" name="nombre" class="formulario__elements-input" required focus  >
      </label>
      <label for="" name="apellido" class="formulario__elements-label">Apellido
      <input type="text" name="apellido"class="formulario__elements-input"  required>
      </label>
    
      <label for="" name="correo" class="formulario__elements-label">Correo
      <input type="email" name="correo" class="formulario__elements-input" required>
      </label>
    
      <label for="" name="fecha_nacimiento" class="formulario__elements-label">Fecha nacimiento
      <input type="date" name="fecha_nacimiento" class="formulario__elements-input" required>
      </label>
    </div>
    <div class="formuario__elements-ciudades">
      <h3 class="formuario__elements-ciudades-label">Seleciona tu ciudad :</h3>
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
          <label for="<?=$values['id_genero']?>"> <?=$values['nombre_genero']?>
          </label>
          <input type="radio" id="<?=$values['id_genero']?>" value="<?=$values['id_genero']?>" name="id_genero">
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
              <input type="checkbox" id="<?=$values['id_lenguaje']?>" value="<?=$values['id_lenguaje']?>" name="id_lenguaje[]">
            </label>  
        </div>
          <?php
        }
        ?>
    </div>
    <div class="formulario__button">
     <button type="submit" >Guardar</button>
    </div>
  </form>
