<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<?php
$a = 10;
$b = 10;
echo "<h1>IGUAL (==)</h1>";
if($a == $b) {
    echo "$a é igual a $b";
} else{
    echo "$a não é igual a $b";
}

echo "<h1>DIFERENTE(!=)</h1>";
$a = 10;
$b = 5;
if($a != $b) {
    echo "$a não é igual a $b";
    
} else{
    echo "$a é igual a $b";
}


echo "<h1>MAIOR QUE(>)</h1>";
$a = 15;
$b = 10;
if($a > $b) {
    echo "$a é maior que $b";
    
} else{
    echo "$a não é maior que $b";
}

echo "<h1>MAIOR OU IGUAL QUE(>=)</h1>";
$a = 10;
$b = 10;
if($a >= $b) {
    echo "$a é maior ou igual que $b";
    
} else{
    echo "$a não é maior ou igual que $b";
}


echo "<h1>MENOR QUE(<)</h1>";
$a = 5;
$b = 10;
if($a < $b) {
    echo "$a é menor que $b";
    
} else{
    echo "$a não é menor que $b";
}

echo "<h1>MENOR OU IGUAL QUE(<=)</h1>";
$a = 10;
$b = 10;
if($a <= $b) {
    echo "$a é menor ou igual que $b";
    
} else{
    echo "$a não é menor ou igual que $b";
}

echo "<h1>OPERADORES RELACIONAIS</h1>";
$idade = 25;
$temCarteiraMotorista = true;

if($idade >= 18 && $temCarteiraMotorista){
    echo "Pode dirigir";
} else {
    echo "Não pode dirigir";
}
?>
    
</body>
</html>


