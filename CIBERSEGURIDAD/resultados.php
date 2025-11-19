<?php

$todobien = true;

//SEGUIR CON EL CSS DEL PHP Y HACIENDO EL EJERCICIO

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

    <?php if ($todobien): ?>
      <h2 id="correcto">Todo ha ido bien</h2>
        <h3>blablabla</h3>
    <?php else: ?>
      <h2 id="desastroso">Todo ha ido fatal</h2>
        <h3>blebleble</h3>
    <?php endif; ?>

</body>
</html>