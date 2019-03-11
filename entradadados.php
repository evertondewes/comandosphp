<?php


//echo '<pre>' . print_r($_GET, true) . '</pre>';


switch ($_GET['op']) {
    case 'soma':
        echo 'Soma: ' . ($_GET['val1'] + $_GET['val2']);
        break;
    case 'sub':
        echo 'Subatração: ' . ($_GET['val1'] - $_GET['val2']);
        break;
    case 'div':
        echo 'Divisão: ' . ($_GET['val1'] / $_GET['val2']);
        break;
    case 'mult':
        echo 'Multiplicação: ' . ($_GET['val1'] * $_GET['val2']);
        break;
}