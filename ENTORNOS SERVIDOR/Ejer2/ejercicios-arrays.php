<!doctype html>
<head>
    <title>Ejercicios PHP: Arrays</title>
</head>
<body>

    <h1>Ejercicios sobre arrays en PHP</h1>

    <p>Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas.</p>

    <section>
        <h2>Ejercicio 1 — Arrays Indexados</h2>
        <p>Trabaja con arrays indexados realizando las siguientes operaciones:</p>
        <ul>
            <li>Crea un array con los días de la semana y muestra el tercer día.</li>
            <li>Añade un nuevo elemento al final del array usando <code>array_push()</code>.</li>
            <li>Elimina el último elemento usando <code>array_pop()</code> y muéstralo.</li>
            <li>Cuenta el número de elementos en el array.</li>
            <li>Busca si existe un elemento específico en el array usando <code>in_array()</code>.</li>
        </ul>

        <?php

        $diasSemana = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];

        print_r($diasSemana[2]);

        echo "<br><br>";

        array_push($diasSemana, "kaka");
        print_r($diasSemana);

        echo "<br><br>";

        array_pop($diasSemana);
        print_r($diasSemana);

        echo "<br><br>";

        echo count($diasSemana);

        echo "<br><br>";

        echo in_array("Lunes", $diasSemana);
        //Escupe 1 que significa que existe, a continuacion buscare algo que no exista y no mostrara nada.
        echo "<br><br>";
        echo in_array("Buenas", $diasSemana);

        ?>

    </section>

    <section>
        <h2>Ejercicio 2 — Arrays Asociativos</h2>
        <p>Trabaja con arrays asociativos realizando las siguientes operaciones:</p>
        <ul>
            <li>Crea un array asociativo con datos de una persona (nombre, edad, ciudad, profesión).</li>
            <li>Añade un nuevo par clave-valor al array.</li>
            <li>Comprueba si existe una clave específica usando <code>array_key_exists()</code>.</li>
            <li>Obtén todas las claves del array usando <code>array_keys()</code>.</li>
            <li>Obtén todos los valores del array usando <code>array_values()</code>.</li>
        </ul>

        <?php

        $persona = [

            "nombre" => "Fran",
            "edad" => "19",
            "ciudad" => "Cieza",
            "profesion" => "Estudiante"

        ];

        $persona["idioma"] = "Español";

        print_r($persona);

        echo "<br><br>";

        echo array_key_exists("nombre", $persona);
        //Me da 1, existe.

        echo "<br><br>";

        print_r(array_keys($persona));

        echo "<br><br>";

        print_r(array_values($persona));

        ?>

    </section>

    <section>
        <h2>Ejercicio 3 — Operaciones con Arrays</h2>
        <p>Realiza las siguientes operaciones con arrays:</p>
        <ul>
            <li>Crea dos arrays y combínalos usando <code>array_merge()</code>.</li>
            <li>Ordena un array numéricamente usando <code>sort()</code> y <code>rsort()</code> (orden ascendente y descendente).</li>
            <li>Ordena un array asociativo por valor usando <code>asort()</code> y <code>arsort()</code>.</li>
            <li>Ordena un array asociativo por clave usando <code>ksort()</code> y <code>krsort()</code>.</li>
        </ul>

        <?php
        
        $array1 = [1, 2, 3];
        $array2 = [4, 5, 6];

        $arrayCombinado = array_merge($array1, $array2);
        print_r($arrayCombinado);

        echo "<br><br>";

        $arrayNumerico = [5, 2, 8, 1, 4];
        sort($arrayNumerico);
        print_r($arrayNumerico);

        echo "<br><br>";

        rsort($arrayNumerico);
        print_r($arrayNumerico);

        echo "<br><br>";

        $arrayAsociativo = [
            "b" => 2,
            "a" => 1,
            "c" => 3
        ];

        asort($arrayAsociativo);
        print_r($arrayAsociativo);

        echo "<br><br>";

        arsort($arrayAsociativo);
        print_r($arrayAsociativo);

        echo "<br><br>";

        ksort($arrayAsociativo);
        print_r($arrayAsociativo);

        ?>

    </section>

    <section>
        <h2>Ejercicio 4 — Arrays Multidimensionales</h2>
        <p>Trabaja con arrays multidimensionales:</p>
        <ul>
            <li>Crea un array multidimensional que represente una agenda de contactos con nombres, teléfonos y emails.</li>
            <li>Añade un nuevo contacto a la agenda.</li>
            <li>Modifica el teléfono de uno de los contactos.</li>
        </ul>

        <?php
        
        $agenda = [

            [
                "nombre" => "Isidro Gamos Alcura",
                "telefono" => "6969696969",
                "email" => "IsiPalazon@gmail.com"
            ],
            [
                "nombre" => "Vaina Bazo",
                "telefono" => "112",
                "email" => "Vai@hotmail.com"
            ]

        ];                

        $nuevoContacto = [
            "nombre" => "Juan Perez",
            "telefono" => "123456789",
            "email" => "juanitobananas@pepe.com"
        ];

        $agenda[] = $nuevoContacto;

        $agenda[2]["telefono"] = "000000000";
        

        ?>

    </section>

</body>
</html>