<!doctype html>
<head>
    <title>Ejercicios PHP: Operaciones</title>
</head>
<body>

    <h1>Ejercicios sobre operaciones (aritméticas, comparación y lógicas)</h1>

    <p>Cada ejercicio incluye solo el enunciado. Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas.</p>

    <section>
        <h2>Ejercicio 1 — Operaciones aritméticas</h2>
        <p>Declara dos variables numéricas y realiza las siguientes operaciones, mostrando el resultado y el tipo:</p>
        <ul>
            <li>Suma</li>
            <li>Resta</li>
            <li>Multiplicación</li>
            <li>División</li>
            <li>Resto (módulo)</li>
            <li>Potencia (usar **)</li>
        </ul>
        <p>Muestra además una operación con mezcla de int/float y observa el tipo resultante.</p>
        <p>Haz una operación de conversión de temperatura. Declara una variable para la temperatura en grados Celsius y conviértela a Fahrenheit y a Kelvin.</p>

        <?php
            
            $num1 = 10;
            $num2 = 5;

       echo $suma = $num1 + $num2 . "<br>";
       echo $resta = $num1 - $num2 . "<br>";
       echo $multiplicacion = $num1 * $num2 . "<br>";
       echo $division = $num1 / $num2 . "<br>";
       echo $resto = $num1 % $num2 . "<br>";
       echo $potencia = $num1 ** $num2 . "<br>";

        ?>

    </section>

    <section>
        <h2>Ejercicio 2 — Operadores de comparación</h2>
        <p>Usa distintos operadores de comparación entre varias parejas de valores y muestra el resultado (true/false) y una explicación breve:</p>
        <ul>
            <li>== y === entre "123" y 123</li>
            <li>!= y !== entre 0 y false</li>
            <li>>, &lt;, &gt;=, &lt;= entre números</li>
            <li>Comparación entre arrays con == y === (explica la diferencia)</li>
        </ul>

        <?php

        $num3 = "123";
        $num4 = 123;

        $array1 = [1,2,3];
        $array2 = [4,5,6];

        if ($num3 == $num4) {

            echo "Son iguales <br>";

        }else {
            echo "No son iguales <br>";
        }

        if ($num3 === $num4) {

            echo "Son del mismo tipo <br>";

        }else {
            echo "No son del mismo tipo (String - Int) <br>";
        }

        if (0 != false) {

            echo "0 es distinto a false <br>";

        }else {
            echo "0 no es distinto a false <br>";
        }

        if (0 !== false) {

            echo "0 es distinto a false (Int - Boolean) <br>";

        }else {
            echo "0 no es distinto a false <br>";
        }

        if ($num1 > $num2) {

            echo "$num1 es mayor que $num2 <br>";

        }else {
            echo "$num1 no es mayor que $num2 <br>";
        }

        if ($num1 < $num2) {

            echo "$num1 no es mayor que $num2 <br>";

        }else {
            echo "$num1 es mayor que $num2 <br>";
        }

        if ($array1 == $array2 ){

            echo "eh lo mimo";

        }else {
            echo "no eh lo mimo<br>";
        }


        if ($array1 === $array2 ){

            echo "eh lo mimo";

        }else {
            echo "no eh lo mimo";
        }


        ?>

    </section>

    <section>
        <h2>Ejercicio 3 — Operadores lógicos</h2>
        <p>Comprueba combinaciones de expresiones booleanas usando AND, OR, XOR y NOT (&&, ||, xor, !). Para cada combinación, muestra la expresión, su valor y una breve explicación del porqué.</p>
        <ul>
            <li>(true && false)</li>
            <li>(true || false)</li>
            <li>(true xor true)</li>
            <li>!false</li>
            <li>Combina condiciones con parentesis para mostrar precedencia (por ejemplo: true || false && false)</li>
        </ul>

        <?php

        if ($num1 > $num2 && $num2 == $num1){
            echo "true";
        }else {
            echo "false<br>";
        }

        if ($num1 < $num2 || 5 == "hola" || $num1 > $num2){
            echo "true<br>";
        }else {
            echo "false";
        }

        if (($num1 > $num2 xor $num2 < $num1)){
            echo "true";
        }else {
            echo "false<br>";
        }

        if (!$num1 < $num2){
            echo "true<br>";
        }else {
            echo "false";
        }

        if ($num1 > $num2 || 5 == "leo" && 9 == "alberto"){
            echo "true";
        }else {
            echo "false";
        }

        ?>

    </section>

    <section>
        <h2>Ejercicio 4 — Mini-retos</h2>
        <p>Resuelve los siguientes mini-retos y muestra cómo los resolverías en PHP:</p>
        <ol>
            <li>Intercambia los valores de dos variables sin usar una tercera variable (usa operadores aritméticos o bit a bit).</li>
            <li>Comprueba si un número es par o impar usando operadores (sin usar funciones).</li>
            <li>Evalúa si una variable está entre dos valores (inclusive) usando operadores de comparación y lógicos.</li>
        </ol>

        <?php

    $a = 5;
    $b = 10;

    $b = $b - $a;
    $a = $a + $a;

    echo "$a <br>";
    echo "$b <br>";

    $num_prueba = 10;
    echo ($num_prueba  % 2 == 0 ? "Es par" : "Es impar");


     
        $ultimo_ejercicio = 20;

        echo ($ultimo_ejercicio > 10 && $ultimo_ejercicio < 30 ? "<br>Esta entre dos numeros" : "No esta entre dos numeros");


?>

    </section>

</body>
</html>
