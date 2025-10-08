<?php

$dia_actual = date('d');
$mes_actual = date('m');
$anio_actual = date('Y');

$futuro = mktime(0, day: $dia_actual + 100,
                    month: $mes_actual + 100,
                    year: $anio_actual + 100 );

echo "En 100 dias, 100 meses y 100 años sera : " . date('d-m-Y',$futuro);



?>