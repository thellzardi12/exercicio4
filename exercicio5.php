<?php

    //declaração variantes
    $num = 4;
    $limite = 30;

    //enquanto numero for menor que 30
    while($num < $limite) {

   //Exibir os numeros
    echo "Executando o loop $num <br>";

    //Se o numero for identico a 24
    if($num === 24) {
        echo "Parando o loop";
        break;
    }
    $num += 2;
 }

?>