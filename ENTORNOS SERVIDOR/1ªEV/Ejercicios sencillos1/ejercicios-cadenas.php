<!doctype html>
<head>
    <title>Ejercicios PHP: Cadenas de texto</title>
</head>
<body>

    <h1>Ejercicios sobre operaciones con cadenas de texto (PHP)</h1>

    <p>Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas.</p>

    <section>
        <h2>Ejercicio 1 — Concatenación y formato</h2>
        <p>Declara varias variables de tipo string (nombre, apellido, ciudad) y:</p>
        <ul>
            <li>Concaténalas con distintos métodos (operador ., interpolación doble comillas).</li>
        </ul>

        <?php

            $nombre = 'Fran';
            $apellido = 'Castaño';
            $ciudad = 'Cieza';

            echo $nombre . ' ' . $apellido . ' es de ' . $ciudad ;
            echo "<br> $nombre $apellido es de $ciudad";

        ?>

        

    </section>

    <section>
        <h2>Ejercicio 2 — Longitud, mayúsculas/minúsculas y recorte</h2>
        <p>Usa funciones para:</p>
        <ul>
            <li>Calcular la longitud de una cadena con `strlen`.</li>
            <li>Convertir a mayúsculas y minúsculas (`strtoupper`, `strtolower`).</li>
            <li>Recortar espacios en los extremos con `trim` y mostrar el antes/después.</li>
        </ul>

        <?php

            $longitud = strlen($nombre);
            $mayusculas = strtoupper($nombre);
            $minusculas = strtolower($nombre);
            $espacios = trim($nombre);

            echo "$nombre <br>";
            echo "$longitud<br>";
            echo "$mayusculas <br>";
            echo "$minusculas<br>";
            echo "$espacios<br>";

        ?>

    </section>

    <section>
        <h2>Ejercicio 3 — Búsqueda y reemplazo</h2>
        <p>Realiza operaciones de búsqueda y sustitución:</p>
        <ul>
            <li>Comprobar si una subcadena existe dentro de una cadena (`strpos` o `str_contains`).</li>
            <li>Reemplazar una palabra por otra usando `str_replace`.</li>
            <li>Haz una versión sensible y otra insensible a mayúsculas (`str_ireplace`).</li>
            <li>Crea una contraseña con tu nombre + tu año de nacimiento, con las siguientes modificaciones:
                <ul>
                    <li>Reemplaza las vocales por (a=@, e=€, i=!, o=0, u=^).</li>
                </ul>
            </li>
        </ul>

        <?php

        $ignacio = "Hola ignacio";


        echo (strpos($nombre, "r") !== false ? "La palabra Fran contiene la letra 'r'" : "La palabra Fran no contiene la letra r");
        echo (str_contains($nombre, "a") !== false ? "<br>La palabra Fran contiene la letra 'a'" : "La palabra Fran no contiene la letra a<br>");
        echo (strpos($nombre, "x") !== false ? "<br>La palabra Fran contiene la letra 'x'" : "<br>La palabra Fran no contiene la letra x<br>");
        echo str_replace("ignacio", "fran<br>", $ignacio);
        echo str_ireplace("IGNACIO", "FRAN<br>", $ignacio);


        $contraseña = str_ireplace(["a", "e", "i", "o", "u"], ["@", "€", "0", "^"], $nombre) . "2006";

            echo $contraseña;
        
        ?>

    </section>

    <section>
        <h2>Ejercicio 4 — Subcadenas y división</h2>
        <p>Trabaja con subcadenas:</p>
        <ul>
            <li>Extraer una subcadena con `substr`.</li>
            <li>Dividir una cadena por un separador con `explode` y volver a unir con `implode`.</li>
            <li>Usa `str_split` para convertir en array de caracteres.</li>
            <li>Escribe tu nombre de Star Wars:
                <ul>
                    <li>Nombre: las primeras 3 letras de tu primer apellido + las primeras 2 letras de tu nombre</li>
                    <li>Apellido: las primeras 3 letras de tu segundo apellido + las primeras 3 letras de tu ciudad</li>
                    <li>En nombre y apellido: convierte la primera letra a mayúscula y el resto a minúscula</li>
                </ul>
            </li>
        </ul>

        <?php

        $cadena = "Hola me llamo Fran";

        echo $dividir_cadena = explode(' ', $cadena);
         $unir_cadena = implode("-", $dividir_cadena);
         $array_cadena = str_split($cadena, 2);

         //Nombre Star wars

         $segundo_apellido = "Ruiz";

         $nombre_star = substr($apellido, 0, 3) . substr($nombre, 0, 3);
         $apellido_star = substr($segundo_apellido, 0, 3) . substr($ciudad, 0, 3)

         //SE QUE SON SOLO LAS DOS PRIMERAS LETRAS DEL NOMBRE PERO CASFRA QUEDA MEJOR QUE CASFR

        ?>

    </section>

    <p><?= $unir_cadena ?></p>
    <p><?= $array_cadena ?></p>
    <p><?= $unir_array_cadena =  implode("-", $array_cadena); ?></p>

    <p>Nombre Star Wars: <?= $nombre_star = ucfirst(strtolower($nombre_star)) . $apellido_star = ucfirst(strtolower($apellido_star)) ?> </p>


</body>
</html>
