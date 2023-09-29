<?php
// Criar o array com valores inteiros de 10 a 100 com incremento de 10
$array_valores = range(10, 100, 10);

// Aplicar um loop
foreach ($array_valores as $valor) {
    // Verificar se o valor é 30 ou 40 e pular para a próxima execução
    if ($valor == 30 || $valor == 40) {
        continue;
    }

    // Realizar alguma operação com o valor (nesse caso, apenas exibir)
    echo $valor . " ";
}
?>