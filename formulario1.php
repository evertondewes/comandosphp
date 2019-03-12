<html>
<form method="post">
    Valor 1:<input type="number" name="valor1"/><br>
    Valor 2:<input type="number" name="valor2"/><br>
    +<input type="radio" name="operacao" value="+"/>
    -<input type="radio" name="operacao" value="-"/>
    *<input type="radio" name="operacao" value="*"/>
    /<input type="radio" name="operacao" value="/"/><br>
    <input type="submit" name="action" value="Enviar"/><br>
</form>
</body>
</html>
<?php

$valor1 = filter_input(INPUT_POST, 'valor1', FILTER_VALIDATE_INT);
$valor2 = filter_input(INPUT_POST, 'valor2', FILTER_VALIDATE_INT);

if (!isset($_POST['operacao'])) {
    echo 'Operação não escolhida';
} else {
    switch ($_POST['operacao']) {
        case '+':
            echo $valor1 + $valor2;
            break;
        case '-':
            echo $valor1 - $valor2;
            break;
        case '*':
            echo $valor1 * $valor2;
            break;
        case '/':
            if ($valor2 == 0) {
                echo 'Proibida a divisão por zero';
            } else {
                echo $valor1 / $valor2;
            }
            break;
    }

}
//echo '<pre>' . print_r($_POST, true). '</pre>';

?>