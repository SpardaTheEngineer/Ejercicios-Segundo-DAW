<?php

$dia_actual = date('d');
$mes_actual = date('m');
$anio_actual = date('Y');


$fecha_salida = mktime(0, day: 17, month: 9, year: 2013);
$fecha_hoy = mktime(0, day: $dia_actual, month: $mes_actual, year: $anio_actual);
echo "Hoy es " . date('d-m-Y', $fecha_hoy) . "<br>";
$diferencia = $fecha_hoy - $fecha_salida;
$dias_transcurridos = $diferencia / (60*60*24);
$meses_transcurridos = $dias_transcurridos / 30;
$anios_transcurridos = $dias_transcurridos / 365;

$anios_transcurridos = (int) ($meses_transcurridos / 12);
$meses_transcurridos = (int) ($meses_transcurridos % 12);
$dias_transcurridos = (int) ($dias_transcurridos % 30);

echo "<p>Y han pasado $dias_transcurridos dias, $meses_transcurridos meses  y $anios_transcurridos años.</p>"


?>