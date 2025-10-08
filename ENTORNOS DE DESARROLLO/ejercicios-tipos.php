<!doctype html>
<head>
    <title>Ejercicios PHP: Tipos de datos y casting</title>
</head>
<body>

    <h1>Ejercicios sobre tipos de datos y casting (PHP)</h1>

    <p>Cada ejercicio incluye solo el enunciado. Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas.</p>

    <section>
        <h2>Ejercicio 1 — Identificar tipos</h2>
        <p>Define varias variables con distintos tipos de datos y muestra su tipo y valor. Debes crear al menos las siguientes variables:</p>
        <ul>
            <li>Una cadena de texto (string).</li>
            <li>Un entero (int).</li>
            <li>Un número de punto flotante (float).</li>
            <li>Un booleano (bool) con valor true y otro con false.</li>
        </ul>
        <p>Para cada variable, muestra su nombre, su tipo y su valor usando funciones de inspección de PHP (p. ej. gettype(), var_dump()).</p>

        <?php

            $string1 = "Hola Mundo";
            $int1 = 10;
            $float1 = 10.3;
            $booleano1 = true;

            echo ('$string1' . " " . gettype($string1) . " " . $string1 . "<br>");
            echo ('$int1' . " " . gettype($int1) . " " . $int1 . "<br>");
            echo ('$float1' . " " . gettype($float1) . " " . $float1 . "<br>");
            echo ('$booleano1' . " " . gettype($booleano1) . " " . $booleano1 . "<br>");


        ?>

    </section>

    <section>
        <h2>Ejercicio 2 — Casting básico</h2>
        <p>Realiza conversiones (castings) entre cadenas y números y observa los resultados. Prueba al menos las siguientes conversiones:</p>
        <ul>
            <li>La cadena "123" a int.</li>
            <li>La cadena "123abc" a int.</li>
            <li>La cadena "abc123" a int.</li>
            <li>El número 45.67 a int y a string.</li>
            <li>La cadena "0" a bool (indica qué resultado esperas y por qué).</li>
            <li>La cadena vacía "" a bool.</li>
        </ul>
        <p>Muestra el resultado de cada casting junto con el tipo resultante.</p>

        <?php

        $cadena123 = "123";
        $cadena123abc = "123abc";
        $cadenaabc123 = "abc123";
        $numerito = 45.67;
        $cerapio = "0"; 
        $vacio = "";

       $resultado1 = (int)$cadena123;
       $resultado2 = (int)$cadena123abc;
       $resultado3 = (int)$cadenaabc123;
       $resultado4a = (int)$numerito;
       $resultado4b = (string)$numerito;
       $resultado5 = (bool)$cerapio;
       $resultado6 = (bool)$vacio;

        echo "Resultado 1: $resultado1 (". gettype($resultado1) . ")<br>";
        echo "Resultado 2: $resultado2 (". gettype($resultado2) . ")<br>";
        echo "Resultado 3: $resultado3 (". gettype($resultado3) . ")<br>";
        echo "Resultado 4-a: $resultado4a (". gettype($resultado4a) . ")<br>";
        echo "Resultado 4-b: $resultado4b (". gettype($resultado4b) . ")<br>";
        echo "Resultado 5: $resultado5 (". gettype($resultado5) . ")<br>";
        echo "Resultado 6: $resultado6 (". gettype($resultado6) . ")<br>";

    ?>

    </section>

    <section>
        <h2>Ejercicio 3 — Cast entre booleanos y números</h2>
        <p>Comprueba cómo se convierten los booleanos en números y cómo se interpretan diversos números como booleanos. Realiza y muestra estas conversiones:</p>
        <ul>
            <li>true a int y false a int.</li>
            <li>1, 0 y 2 a bool (explica por qué cada uno da true o false).</li>
        </ul>
        <p>Incluye la inspección de tipo y valor para cada conversión.</p>

        <?php
        // EJERCICIO 3
        ?>

    </section>

</body>
</html>
