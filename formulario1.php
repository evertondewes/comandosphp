<html>
<form method="post" >
 <input type="text"  name="valor" /><br>
 <input type="radio"  name="sexo" value="masculino"/>Masculino<br>
 <input type="radio" name="sexo" value="feminino" checked="checked"/>Fem<br>
 <input type="password"  name="senha" />Senha<br><br>
 <input type="radio" name="estrangeiro" value="sim"/>Estrangeiro<br>
 <input type="radio" name="estrangeiro" value="nao" checked="checked" />Br<br>
 <input type="submit" name="action" value="Enviar"/><br>
</form>
</body>
</html>
<?php

if(isset($_POST['sexo'])){
    echo 'Variavel existe<br>';
}
echo '<pre>' . print_r($_POST, true). '</pre>';

?>