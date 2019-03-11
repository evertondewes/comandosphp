<?php

$meuArray = array('professor' => 'Everton',
                  'diretor' => 'João',
                  'secretario' => 'Paulo',
                  'coordenador' => 'Pedro');

$meuSegundoArray = [12 => 'Pera', 4 => 'Maça', 0 => 'Abacate', 1 => 0];

$meuArray['professor'] = 'Agnaldo';


//$meuArray['frutas'] = $meuSegundoArray;

foreach ($meuArray as $chave => $nome) {
    echo $chave . ': ' .$nome . '<br>';
}

//echo '<pre>' . print_r($meuArray, true) . '</pre>';

