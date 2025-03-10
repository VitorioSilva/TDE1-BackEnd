<?php

$N = 3;

$confianças = [
    [1, 15, 37],
    [42, 8, 25],
    [77, 2, 1]
];

$ordem = [];

for ($i = 0; $i < $N; $i++) {
    $max_confiança = -1;
    $melhor_posicao = -1;

    for ($j = 0; $j < $N; $j++) {
        if (!in_array($j + 1, $ordem) && $confianças[$i][$j] > $max_confiança) {
            $max_confiança = $confianças[$i][$j];
            $melhor_posicao = $j + 1;
        }
    }

    $ordem[] = $melhor_posicao;
}

echo implode(' ', $ordem);

?>
