 <?php
//  $estudiantes=array('carlos','jose','luis','maria');
$estudiantes=array('carlos','jose','luis','maria');
 echo" <pre>";
//  var_dump($estudiantes);
print_r($estudiantes);
echo" </pre>";

echo $estudiantes[2];

$aprendiz=[
  "nombre"=>'estefani',
  "apellido"=>'estupiñan',
  'edad' =>'19',
  'deudas'=>'200.000'
];
echo" <pre>";
print_r($aprendiz);
echo" </pre>";
$tutor=[
  'nombre'=>'john',
  'apellido'=>'becerra',
  'edad'=>38,
  'direccion'=>[
    'ciudad'=>'bucaramanga',
    'barrio'=>'san francisco ',
    'nomenclatura'=>'carrera 25 ',
    'zipcode'=>666554
  ],
  'habilidades'=>[
    'git ','html','css','js','php','python','sql',
  ]
];
echo " <pre>";
print_r($tutor);
echo" </pre>";

echo " <pre>";
print_r($tutor['direccion']['nomenclatura']);
echo" </pre>";

echo " <pre>";
print_r($tutor['habilidades'][4]);
echo" </pre>";

echo " <pre>";
/**cambiar o aisgnar otro nombre , como una sobreescritura */
$tutor['habilidades'][4]='java script';
print_r($tutor['habilidades']);/**se imprime de nuevo  */
echo" </pre>";
/**agregar */
echo " <pre>";
$tutor['direccion']['departamento']='santander';
print_r($tutor['direccion']);
echo " </pre>";


/**eliminar */
echo " <pre>";
array_splice($tutor['habilidades'],4,1);

echo " </pre>";
/**concatenacion */

