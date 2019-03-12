<html>
<form method="post" >
 Valor 1:<input type="number"  name="valor1" /><br>
 Valor 2:<input type="number"  name="valor2" /><br>
 +<input type="radio" name="operacao" value="+"/>
 -<input type="radio" name="operacao" value="-"/>
 *<input type="radio" name="operacao" value="*"/>
 /<input type="radio" name="operacao" value="/"/><br>
 <input type="submit" name="action" value="Enviar"/><br>
</form>
</body>
</html>
<?php

if(!isset($_POST['valor1']) || trim($_POST['valor1'])==""){
    echo 'Valor 1 não foi informado<br>';
} else {
    if(!isset($_POST['valor2']) || trim($_POST['valor2'])=="") {
        echo 'Valor 2 não foi informado<br>';
    } else {
        if(!isset($_POST['operacao'])) {
            echo 'Operação não escolhida';
        } else {
            switch ($_POST['operacao']) {
                case '+': echo $_POST['valor1'] + $_POST['valor2'];
                    break;
                case '-': echo $_POST['valor1'] - $_POST['valor2'];
                    break;
                case '*': echo $_POST['valor1'] * $_POST['valor2'];
                    break;
                case '/':
                        if($_POST['valor2'] == 0) {
                            echo 'Proibida a divisão por zero';
                        } else {
                            echo $_POST['valor1'] / $_POST['valor2'];
                        }
                    break;
            }
        }
    }
}
//echo '<pre>' . print_r($_POST, true). '</pre>';

?>