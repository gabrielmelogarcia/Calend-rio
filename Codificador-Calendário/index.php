<?php
$calendario = array(); // Utilizei array como um vetor pra criar uma variável única e também por conta dos valores de 1 a 31.
for ($numero = 1; $numero <= 31; $numero = $numero + 1) { // Utilizei o for pra repetir a numeração sem precisar fazer uma por uma.
    $calendario[] = $numero; // Criação de toda a lista com os números.
}

$posicaodonumero = 0;
while ($posicaodonumero < 31) {
    echo $calendario [$posicaodonumero];
    echo " "; // Aqui pra fazer a separação e dar espaço nos números do dia que foi escolhido.
    $posicaodonumero = $posicaodonumero + 1; // Para o sistema fazer a contagem de cada número e que permaneça na ordem das numerações, permitindo colocar qualquer número de 1 a 31 aleatoriamente sem interromper.
}

$escolherodia = 10; // Caso coloque um número que não esteja dentro de 1 a 31, ele não vai validar.

if ($escolherodia >= 1) { // Validação se for o número 0 ou menor que 0. 
    if ($escolherodia <= 31) { // Para o número máximo ser 31 e não validar número maior que 31.
        echo "O dia que foi escolhido:";
        echo $escolherodia;
    } else {
        echo "Esse dia está inválido.";
    }
} else {
    echo "Esse dia está inválido.";
}
?>
