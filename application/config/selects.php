<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$config['roles_list'] = array( 
	'1' => 'recruiter', 
	'2' => 'user_simple', 
);


$config['niveles_estudio_list'] = array( 
	'Primarios' => 'Primarios', 
	'Secundarios' => 'Secundarios', 
	'Universitarios' => 'Universitarios', 
	'otros' => 'otros', 

);



$config['aprobado_list'] = array('1' => 'Si', '0' => 'No' );

$config['finalizado_list'] = array('1' => 'Si', '0' => 'No' );

$config['duracion_list'] = array(
	'1' => '1 días',
	'2' => '2 días',
	'3' => '3 días',
	'4' => '4 días',
	'5' => '5 días',
	'6' => '6 días',
	'7' => '7 días',
	'10' => '10 días',
	'15' => '15 días',
	'20' => '20 días',
	'30' => '30 días',
	'45' => '45 días'
	);

$config['provincias_list'] = array(
'1' =>'Ciudad Autonoma de Buenos Aires',
'2' => 'Provincia de Buenos Aires',
'3' => 'Catamarca',
'4' => 'Chaco',
'5' => 'Chubut',
'6' => 'Córdoba',
'7' => 'Corrientes',
'8' => 'Entre Ríos',
'9' => 'Formosa',
'10' => 'Jujuy',
'11' => 'La Pampa',
'12' => 'La Rioja',
'13' => 'Mendoza',
'14' => 'Misiones',
'15' => 'Neuquén',
'16' => 'Río Negro',
'17' => 'Salta',
'18' => 'San Juan',
'19' => 'San Luis',
'20' => 'Santa Cruz',
'21' => 'Santa Fe',
'22' => 'Santiago del Estero',
'23' => 'Tierra del Fuego',
'24' => 'Tucumán',
'25' => 'Otro'
);


$config['paises_list'] = array(
'1' =>'Argentina',
'2' => 'Bolivia',
'3' => 'Brazil',
'4' => 'Chile',
'5' => 'Colombia',
'6' => 'Ecuador',
'7' => 'Paraguay',
'8' => 'Peru',
'9' => 'Uruguay',
'10' => 'Venezuela',
'11' => 'Mexico',
'12' => 'España',
'13' => 'Otro'
);
