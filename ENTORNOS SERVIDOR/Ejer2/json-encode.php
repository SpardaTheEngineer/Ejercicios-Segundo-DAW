<?php
/* 

Ejercicio 1: Array simple a JSON

Crea un array en PHP con el nombre, la edad y la ciudad de una persona. Convierte ese array a JSON usando json_encode() y muéstralo por pantalla.
Ejercicio 2: JSON a array

Copia el resultado del ejercicio anterior (el JSON) en una variable como cadena y conviértelo de nuevo a un array asociativo usando json_decode().
Muestra solo el nombre.

Ejercicio 3: Array multidimensional

Crea un array que contenga varios usuarios, cada uno con nombre, correo y edad.
Convierte el array completo a JSON y muéstralo.
Después (en otro bloque) decodifícalo y muestra el correo del segundo usuario.

Ejercicio 4: Modificar datos después de decodificar

Tienes un JSON que contiene información de un producto (nombre, precio, stock).
Decodifícalo, cambia el precio, y vuelve a convertirlo a JSON.

Ejercicio 5: JSON dentro de una cookie

Convierte un array asociativo (por ejemplo, usuario + rol) en JSON y guárdalo en una cookie.
Después, al recargar la página, obtén la cookie, decodifícala y muestra el rol del usuario.

Ejercicio 6: Guardar varias preferencias del usuario

Crea un array con configuraciones del usuario (tema oscuro, idioma, notificaciones).
Convierte el array en JSON y guárdalo en $_SESSION.
Después, decodifícalo y muestra el idioma.
*/

//EJERCICIO 1
$persona = [
    'manuel',
    20,
    'cieza'
];
echo json_encode($persona);
echo '<br>';
//EJERCICIO 2
$personaString = '["manuel", 20, "cieza"]';
$personaArray = json_decode($personaString);
echo $personaArray[0];
echo '<br>';
//EJERCICIO 3
$multi = [
    [
        'manuel',
        'manolo@gmail.com',
        20,
    ],
    [
        'fran',
        'francisco@gmail.com',
        19,
    ],
    [
        'minerva',
        'minerevita@gmail.com',
        20,
    ],
    [
        'alberto',
        'albertito98@gmail.com',
        26,
    ]
];
$multijson = json_encode($multi);
echo $multijson;
echo '<br>';
$multiArray = json_decode($multijson);
echo $multiArray[1][1];
echo '<br>';
//EJERCICIO 4
$producto = [
    'nombre' => 'Camiseta',
    'precio' => 20,
    'stock' => 50
];

$jsonProducto = json_encode($producto);
$productoArray = json_decode($jsonProducto, true);
$productoArray['nombre'] = str_ireplace('Camiseta','Camison', $productoArray['nombre']);
$nuevoJsonProducto = json_encode($productoArray);
echo $nuevoJsonProducto;
echo '<br>';
//EJERCICIO 5
$usuario = [
    'nombre'=> 'Manolito',
    'rol'=> 'Dame La Patita',
];
$jsonUsuario = json_encode($usuario);
setcookie('usuario', $jsonUsuario, time() + 3600);
$usuarioArray = json_decode($jsonUsuario, true);

echo $usuarioArray['rol'];
echo '<br>';
//EJERCICIO 6
session_start();
$preferencias = [
    'Tema'=> 'OScuro',
    'Idioma'=> 'Franchute',
    'Notificaciones'=> true,
];
$preferenciasJson = json_encode($preferencias);
$_SESSION['preferencias'] = $preferenciasJson;
$preferenciaArray = json_decode($_SESSION['preferencias'], true);
echo $preferenciaArray['Idioma'];
echo '<br>';