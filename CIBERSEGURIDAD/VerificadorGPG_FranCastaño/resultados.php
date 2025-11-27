<?php

$todobien = false;

if (isset($_POST['verificar'])) {

    if (
        isset($_FILES['clave'], $_FILES['archivo'], $_FILES['firma']) &&
        $_FILES['clave']['error'] === UPLOAD_ERR_OK &&
        $_FILES['archivo']['error'] === UPLOAD_ERR_OK &&
        $_FILES['firma']['error'] === UPLOAD_ERR_OK
    ) {
        $nombreClave   = $_FILES['clave']['name'];
        $nombreArchivo = $_FILES['archivo']['name'];
        $nombreFirma   = $_FILES['firma']['name'];

        $keyFile       = '/tmp/clave.asc';
        $dataFile      = '/tmp/archivo_original';
        $signatureFile = '/tmp/firma.asc';

        move_uploaded_file($_FILES['clave']['tmp_name'], $keyFile);
        move_uploaded_file($_FILES['archivo']['tmp_name'], $dataFile);
        move_uploaded_file($_FILES['firma']['tmp_name'], $signatureFile);

        $comandoImport = "gpg --import " . escapeshellarg($keyFile);
        $salidaImport  = shell_exec($comandoImport . " 2>&1");

        $comandoVerify = "gpg --verify " . escapeshellarg($signatureFile) . " " . escapeshellarg($dataFile);
        $salidaVerify  = shell_exec($comandoVerify . " 2>&1");

        if (strpos($salidaVerify, 'Good signature') !== false) {
            $todobien = true;
        } else {
            $todobien = false;
        }

    } else {
        $todobien = false;
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>

  <h1>Resultado</h1>

  <h3>Archivos subidos:</h3>
  <ul>

    <li>Clave publica: <strong><?php echo htmlspecialchars($nombreClave); ?></strong></li>
    <li>Archivo original: <strong><?php echo htmlspecialchars($nombreArchivo); ?></strong></li>
    <li>Firma: <strong><?php echo htmlspecialchars($nombreFirma); ?></strong></li>

  </ul>

  <?php if ($todobien = true): ?>
    <h2 id="correcto">Firma valida y correcta</h2>
  <?php else: ?>
    <h2 id="desastroso">Firma invalida o no correcta</h2>
  <?php endif; ?>

</body>

</html>