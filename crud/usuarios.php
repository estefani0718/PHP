<?php
require('conexion.php');
$db=new conexion();
$conexion=$db->getConexion();
$sql="select *from Usuarios;";
$bandera=$conexion -> prepare ($sql);
$bandera->execute();
$Usuarios=$bandera->fetchAll();
?>
<table border="1">
    <tr>
        <td>Id_usuario</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Correo</td>
        <td>fecha_nacimiento</td>
        <td>Ciudad</td>
        <td>Genero</td>
        <td>Editar</td>
        <td>Eliminar</td>
    </tr>
   <?php
    foreach ($Usuarios as $key => $values) { 
    ?>     
     <tr>
       <td><?=$values['id_usuario']?></td>
       <td><?=$values['nombre']?></td>
       <td><?=$values['apellido']?></td>
       <td><?=$values['correo']?></td>
       <td><?=$values['fecha_nacimiento']?></td>
       <td><?=$values['id_ciudades']?></td>
       <td><?=$values['id_genero']?></td>
        <td><a href="editar.php?id=<?=$values['id_usuario']?>">Editar</a></td>
        <td><a href="eliminar.php?id=<?=$values['id_usuario']?>">Eliminar</a></td>
        </tr>
    <?php }?>
</table>


