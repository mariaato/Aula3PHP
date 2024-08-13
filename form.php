<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>
    <?php
    //Captura os valores dos campos de entrada do formulario e armazena em variaveis
    $num01 = filter_input (INPUT_POST , "txtNumero1"); //captura o valor do campo txtNumero1
    $num02 = filter_input (INPUT_POST , "txtNumero2");//captura o valor do campo txtNumero2

    $resul = ($num01 + $num02); // calcula a soma dos numeros e armazena em resul


?>
<h1> Exemplo de Formulario PHP</h1>
<form method="post">
    <label>Numero 1: <input type="text" name="txtNumero1"/></label><br>
    <label>Numero 2: <input type="text" name="txtNumero2"/></label><br>
    <br>
    <input type="submit" name="bntCalcular" value="Calcular">

</form>

<!-- Exibe resultado da soma dos numeros -->
 <h1>Resultado</h1>
 <h1><?php echo $resul;?> </h1>

</body>
</html>