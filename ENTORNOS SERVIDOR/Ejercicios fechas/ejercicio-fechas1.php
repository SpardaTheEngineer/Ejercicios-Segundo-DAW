<?php

    $horas = 10000;
    $dias_para_ser_experto = (int) $horas / 3; //Le dedico 3 horas al dia...

    echo ("$dias_para_ser_experto Dias para ser experto. <br>");

    $fecha_final = mktime(0,0,0,date('m'),date('d') + round($dias_para_ser_experto),date('y'));

    $fecha_final_final = date('d-m-Y', $fecha_final);

    echo "Sere un experto el $fecha_final_final";


?>