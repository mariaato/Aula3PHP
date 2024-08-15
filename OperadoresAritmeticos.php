<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "<h1> Operador and(&&)</h1>";
    $idade = 25;
    $temPermissao = true;

    if($idade >= 18 && $temPermissao) {

        echo "Pode entrar na festa";
    } else{
        echo "Não pode entrar na festa";
    }

    echo "<h1> Operador or(||)</h1>";
    $temIngresso = false;
    $temConvite = true;

    if($temIngresso || $temConvite) {
        echo "Pode entrar no evento";
    } else {
        echo "Não pode entrar no evento";
    }

    echo "<h1> Operador not(!)</h1>";
    $usuarioLogado = false;

    if(!$usuarioLogado) {
        echo "Por favor, faça o login para continuar";
    }

    echo "<h1>Uso de parenteses</h1>";
    $idade = 20;
    $temAutorização = true;
    $temPermissao = true;

    if(($idade>=18 && $temAutorização) || $temPermissao){
        echo "Pode acessar o conteudo restrito";
    } else {
        echo "Não pode acessar o conteudo restrito";
    }











?>
</body>
</html>