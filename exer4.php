<?php

/*
Faça um programa que percorra uma String
apresentando seus caracteres,
porém não exibe as vogais.
 */

$stringEntrada = 'O Gremio vai sair campeao';

for($i=0; $i < strlen($stringEntrada); $i++) {
    if(
        $stringEntrada[$i]!= 'a' &&
        $stringEntrada[$i]!= 'e' &&
        $stringEntrada[$i]!= 'i' &&
        $stringEntrada[$i]!= 'o' &&
        $stringEntrada[$i]!= 'u' &&
        $stringEntrada[$i]!= 'A' &&
        $stringEntrada[$i]!= 'E' &&
        $stringEntrada[$i]!= 'I' &&
        $stringEntrada[$i]!= 'O' &&
        $stringEntrada[$i]!= 'O'
    ) {
        echo $stringEntrada[$i];
    }
}

echo '<br>';

$vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
echo str_replace($vogais, "", $stringEntrada);