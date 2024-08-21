<?php


// Basico
$diasDaSemana = "quarta";

switch($diasDaSemana){
    case "segunda":
        echo "Hoje é segunda-feira";
        break;
    case "terça":
        echo "Hoje é terça-feira";
        break;
    case "quarta":
        echo "Hoje é quarta-feira";
        break;
    // ...
    default:
        echo "Dia invalido";
}

// comparação de valores
$nota = 85;

switch(true){
    case($nota >=90):
        echo "Você tirou uma nota execelente";
        break;
    case($nota>=70):
        echo "Você foi bem na prova ";
        break;
    default:
    echo "É uma boa ideia estudar mais para a proxima vez";


}

//relacional e logico

$hora = 18;

switch(true){
    case($hora >= 6 && $hora < 12):
    echo "Bom dia";
    break;
    case($hora >=12 && $hora <18):
        echo "Boa tarde";
        break;
    default:
    echo "Boa noite";

}

?>