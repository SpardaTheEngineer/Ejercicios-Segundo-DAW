<!doctype html>
<head>
    <title>Ejercicios PHP: Constantes</title>
</head>
<body>

    <h1>Ejercicios sobre constantes (predefinidas, mágicas y definición)</h1>

    <p>Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas. Cada sección contiene enunciados y sugerencias para experimentar.</p>

    <section>
        <h2>Ejercicio 1 — Constantes predefinidas</h2>
        <p>PHP incluye muchas constantes predefinidas útiles. Muestra el valor y explica brevemente cada una de las siguientes constantes:</p>
        <ul>
            <li>Versión de PHP</li>
            <li>Sistema operativo</li>
            <li>Separador de directorios</li>
        </ul>
        <p>Además, usa <code>defined()</code> para comprobar si una constante predefinida existe antes de mostrarla.</p>

        <?php

        echo "Versión de PHP: " . PHP_VERSION . "\n";
        echo "Sistema operativo: " . PHP_OS . "\n";
        echo "VSeparador de directorios: " . DIRECTORY_SEPARATOR . "\n";

        if (defined('PHP_VERSION')) {
            echo "<br>La constante PHP_VERSION esta definida.<br>" ;
        }else {
            echo "La constante no esta definida<br>" ;
        }

        if (defined('PHP_OS')) {
            echo "La constante PHP_OS esta definida.<br>" ;
        }else {
            echo "La constante no esta definida<br>" ;
        }       

        if (defined('DIRECTORY_SEPARATOR')) {
            echo "La constante DIRECTORY_SEPARATOR esta definida.<br>" ;
        }else {
            echo "La constante no esta definida<br>" ;
        }      

        ?>

    </section>

    <section>
        <h2>Ejercicio 2 — Constantes "mágicas"</h2>
        <p>Las constantes mágicas cambian según el contexto (archivo, línea, clase, método...). Muestra el valor de estas constantes dentro del archivo y explica su comportamiento:</p>
        <ul>
            <li>Fichero actual</li>
            <li>Directorio actual</li>
            <li>Número de línea actual</li>
        </ul>

        <?php

        echo "Fichero actual: " . __FILE__ . "<br>";
        echo "Director actual: " . __DIR__ . "<br>";
        echo "Numero de linea actual: " . __LINE__ . "<br>";


        ?>

    </section>

    <section>
        <h2>Ejercicio 3 — Definir tus propias constantes (define y const)</h2>
        <p>Practica la creación de constantes con <code>define()</code> y con <code>const</code> dentro y fuera de clases. En particular:</p>
        <ul>
            <li>Define una constante global usando <code>define</code> y muéstrala.</li>
            <li>Define otra constante usando <code>const</code> dentro de una clase y accede a ella.</li>
            <li>Intenta redefinir una constante y observa el comportamiento.</li>
            <li>Comprueba la diferencia entre constantes y variables (inmutabilidad).</li>
        </ul>

        <?php

        const NOMBRE = "Fran";
       
        define ('APELLIDO', "Castaño");
        
        echo NOMBRE . "<br>" . APELLIDO . "<br>";

        class Ciudad {

            const CIUDAD = "Cieza";

        }
        
        echo Ciudad::CIUDAD;


        ?>

    </section>

</body>
</html>
