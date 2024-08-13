<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            text-align: center;
        }
        h1{
            color: pink;
        }
        </style>
</head>
<body>
    <?php
//array simples
echo "<h1>Array simples</h1>";
$numeros = array(1, 2, 3, 4, 5);

echo $numeros[0] . "<br>";
echo $numeros[1] . "<br>" ;
echo $numeros[2] . "<br>" ;


// Sintaxe Alternativa

$numeross = [1, 2, 3, 4, 5];
echo $numeross[0] . "<br>";
echo $numeross[1] . "<br>" ;


$dados = ["nome" => "João" , "idade" => 30];
//exemplo com echo
echo "<h1>ECHO</h1>";
echo "Nome : " . $dados["nome"] . ", Idade: " . $dados["idade"];
//exemplo com print_r
echo "<h1>PRINT_R</h1>";
print_r($dados);
echo "</pre>";


//array associativo 
echo "<h1>Array associativo</h1>";
$pessoa = array(
    "nome" => "Aluno",
    "idade" => 28,
    "instituição" => "FMP"
);

echo $pessoa["nome"];


//Alterando valor da chave array

$pessoa = array(
    "nome"=> "Joao",
    "cpf"=> "123.456.789-00",
    "email" => "joao@example.com"
);

echo $pessoa["nome"];
echo "<br>";
echo $pessoa["cpf"];
echo "<br>";
echo $pessoa["email"];
echo "<br>";
echo "<br>";
echo $pessoa["nome"] = "Roberto";
echo "<br>";
echo $pessoa["cpf"] = "987.654.321-00";
echo "<br>";
echo $pessoa["email"] = "roberto@example.com";
echo "<br>";
echo "<br>";



//Percorrendo Array
echo "<h1>Percorrendo Array</h1>";
$letras = ["A", "B", "C", "D", "F", "G"];

for ($i = 0; $i <3; $i++){
    // o loop for percorre o array $letras
    // $i é o contador da iteração, começa em 0 e aumenta até o número de elementos no array

    echo $letras[$i] . " ";


}
echo "<br>";
for ($i = 0; $i < count($letras); $i++){
    echo $letras[$i] . " ";
}


$numeros = [1, 2, 3, 4, 5];

foreach ($numeros as $numero){
    echo "<br>";
    echo $numero . " ";
   
}

$array = ["Faculdade" , "Municipal" , "Palhoça" , "-" , "A", "D", "S"];
// utiliza a função count() para retornar o numero de elementos de um array
$numeroselementos = count($array);
// Imprime o numero de elementos
echo "<br>";
echo "O array contem " . $numeroselementos . " elementos.";


echo "<h1>Array Push</h1>";
$array = ["PHP", "HTML", "JavaScript"];

//imprime cada elemento do array usando um loop for
for($i = 0 ; $i < count($array); $i++){
    echo "<br>";
    echo $array[$i] . "<br>";
}
echo "<br>";
echo "Adiciona um elemento ao final do array usando a função array_push() <br>";
echo "<br>";
$valor = "Python";
array_push($array, $valor);

for($i = 0 ; $i < count($array); $i++){
    echo "<br>";
    echo $array[$i] . "<br>";
}


echo "<h1>Array Pop</h1>";
$array = ["PHP", "HTML", "JavaScript"];

//imprime cada elemento do array usando um loop for
for($i = 0 ; $i < count($array); $i++){
    echo "<br>";
    echo $array[$i] . "<br>";
}

echo "Remove e retorna o ultimo elemento do array usando a função array_pop() <br>";
$ultimoElemento = array_pop($array);
echo "ultimo elemento removido : " . $ultimoElemento . "<br>";

foreach($array as $elemento){
    echo "<br>";
    echo $elemento . "<br>";
}


echo "<h1>Array merge</h1>";
$array1 = ["PHP" , "HTML" , "JavaScript"];
$array2 = ["Python" , "Java" , "C++"];

echo "Array1: <br>";
for($i = 0; $i < count($array1); $i++){
    echo "<br>";
    echo $array1[$i] . "<br>";
}


echo "Array2: <br>";
for($i = 0; $i < count($array2); $i++){
    echo "<br>";
    echo $array2[$i] . "<br>";
}

echo "Combna dois arrays usando a função array_merge() <br>";
$combinedArray = array_merge($array1, $array2);

echo "Array Combinado : <br>";
foreach ($combinedArray as $element){
    echo $element . "<br>";
}


echo "<h1>Array Keys</h1>";
$array = [
    "nome" => "Joao",
    "idade" => 30,
    "cidade" => "Sao Paulo"
];

echo "Array original: <br>";
foreach ($array as $key => $value) {
    echo "$key: $value<br>";
}

//obtem um array com as chaves usando a função array_keys()
$chaves = array_keys($array);

//imprime o array com chaves
echo "Array de chaves: <br>";
foreach ($chaves as $chave){
    echo "$chave<br>";
}


echo "<h1>Array Multidimensional </h1>";

$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $matriz[1][2];
echo "<br>";

$matriZ = [
    ["Python" , "Java", "C++"],
    ["JavaScript", "Ruby", "PHP"],
    ["Swift" , "Kotlin", "C#"]
];

echo $matriZ[0][1];


echo "<h1>Utilizando printr na matriz </h1>";

$matriz = [
    ["Maça" , "Banana", "Cereja"],
    ["Laranja", "Uva", "Pera"],
    ["Abacaxi" , "MOrango", "Melancia"]
];

echo $matriz[1][2];

//exibindo a matriz completa com print_r
echo "<pre>";
print_r($matriz);
echo "</pre>";

echo "<h1>Percorrendo Arrray Multidimensional</h1>";

$matriz = [
    ["Python" , "Java", "C++"],
    ["JavaScript", "Ruby", "PHP"],
    ["Swift" , "Kotlin", "C#"]
];


//Percorrendo a matriz usando um loop for
for($linha = 0; $linha < count($matriz); $linha++){
    for($coluna = 0; $coluna < count($matriz[$linha]); $coluna++){
        echo $matriz [$linha][$coluna] . " ";
    }
    echo "<br>";
}

?>


</body>
</html>
