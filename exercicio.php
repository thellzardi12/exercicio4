<?php 
    $vel = 40;

    if ($vel >= 41 && $vel <= 50) {
        echo "Sua velocidade está correta";
    } else if ($vel == 40) {
        echo "Atenção!!! Aumente sua velocidade.";
    } else if ($vel >= 51) {
        echo "Velocidade acima da média! Sujeito a multa!!";
    }

?>