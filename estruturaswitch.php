<?php

//Declaração de variaveis
$numero = 5;
$nome = "";

// 16 a variavel 
switch($numero) {

    //compara a variavel 
    case 4:
        echo "O numero é igual a 4 <br>";
        break;
    //compara a variavel 
    case 5:
        break;
    //valor nulo
    default;
    echo "O numero não corresponde aos valores <br>";

}

    // lê a variavel 
switch($nome) {

    //compara a variavel
    case "Rosana";
    break;
    
    //compara a variavel
    case "Isis":
        echo "O nome é Isis";
        break;

    //valor nulo
    default:
        echo "O nome não foi encontrada";
}

?>