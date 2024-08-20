<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "<h1>Estrutura if</h1>";
    $nota = 85;
    if($nota >= 60){
        echo "Você passou no exame";
    }

    echo "<h1>Estrutura else</h1>";
    $tempo = "chuvoso";
    if($tempo == "ensolarado"){
        echo "Vamos a praia!";
    } else{
        echo "Melhor ficar em casa hoje";
    }

    echo "<h1>Estrutura else if</h1>";
    $nota = 75;
    if($nota >= 90){
        echo "Parabens, você tirou uma nota execelente!";
    } else if($nota >= 70){
        echo "Você foi bem na prova";
    } else{
        echo"È uma boa ideia estudar mais para a proxima vez";
    }

    echo "<br>";
    echo "<br>";

    $idade = 25;
    if($idade < 13) {
        echo "Criança";
    }else if ($idade < 18){
        echo "Adolescente";
    }else if($idade < 30){
        echo "Adulto jovem";
    }else {
        echo "Adulto";
    }

    echo "<h1>Operadores de Comparação</h1>";
    $numero = 7;
    if($numero % 2 == 0){
        echo "$numero é um número par";
    } else{
        echo "$numero é um número impar";
    }

    echo "<h1>Estruturas Condicionais Aninhadas</h1>";
    $idade = 21;
    if($idade >= 18){
        if($idade <= 21){
            echo "Você é um adulto jovem";
        }else{
            echo "Você é um adulto";
        }
    }else{
        echo "Você é um menor de idade";
    }

    ?>




</body>
</html>