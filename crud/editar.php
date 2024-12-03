 <?php
 require('conexion.php');
 $db=new conexion();
 $conexion=$db->getConexion();

 $id_usuario=$_GET["id"];

 $sql="SELECT * FROM Usuarios where id_usuario=:id";
 $stm=$conexion->prepare($sql);
 $stm->bindParam(':id',$id);
 $Usuarios=$stm->fetch();


 $nombre_genero=$_GET["nombre_genero"];

 $sql="SELECT * FROM Generos where nombre_genero=:nombre";
 $stm=$conexion->prepare($sql);
 $stm->bindParam(':nombre',$nombre);
 $Generos=$stm->fetch();



?>
 <form action="">
      <label for="hidden" name="id_usuario" values="<?=$Usuarios['id_usuario']?>"></label>
      <div>
            <label for="" name="nombre">Nombre:</label>
            <input type="text" name="nombre" values="<?=$Usuarios['nombre']?>" >
            </label>
      </div>
        <div>
            <label for="" name="apellido" >Apellido
                <input type="text" name="apellido" values="<?=$Usuarios['apellido']?>">
            </label>
        </div>
      <div>
            <label for="" name="correo" >Correo
            <input type="email" name="correo" values="<?=$Usuarios['correo']?>">
            </label>
      </div>
        <div>
            <label for="" name="fecha_nacimiento" >Fecha nacimiento
            <input type="date" name="fecha_nacimiento" values="<?=$Usuarios['fecha_nacimiento']?>"> 
        </div>
        <div >
      <h3 ></h3>
      <label for="id_ciudades">Ciudad </label>
      <select name="id_ciudades" id="id_ciudades">
        <?php
        foreach ($ciudades as $Ciudades){
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
      <h3></h3>
      <label for="id_genero">Genero: 
        <?php
        foreach ($Generos as $key =>$values){
          ?> 
          <div>
          <label for="<?=$values['id_genero']?>"> <?=($genero ["id_genero"]==$Usuarios["id_genero"])?>
          </label>
          <input type="radio" id="<?=$values['id_genero']?>" value="<?=$values['id_genero']?>" name="nombre">
          </div>
          <?php
        }
        ?>
      </label>
    </div>
    <div>
      <h3> </h3>
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
 </form>