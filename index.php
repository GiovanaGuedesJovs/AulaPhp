<?php
// FUNÇÕES

// Função sem retorno e sem parâmetros

function calcularSoma(){
    $resultado = 4 + 4;
    echo $resultado;
}

// calcularSoma(); // Chamada da função
 
// Função sem retorno e com parâmetros

function calcularPreco($quantidade, $preco){
    $valor = $quantidade * $preco;
    echo $valor;
}

// calcularPreco(5, 7);

// Função com retornoe  com parâmetro

function calcularSubtracao($n1, $n2){
    return $n1 - $n2;
}

//echo calcularSubtracao(5, 2);

$resultado = calcularSubtracao(5, 2);

//echo $resultado;

function calcularSomaSequencia($limite){
    $soma = 0;
    for($i = 0; $i < $limite; $i++){
        $soma += $i;
    }
    return $soma;
}

//echo calcularSomaSequencia(5);

function ePar($numero){
    if($numero % 2 == 0){
        return true;
    }
    return false;
}

// if(epar(12)){
//     echo "O número é par.";
// }else{
//     echo "O número é ímpar.";
// }

//echo epar(12)? "O número é par.":"O número é ímpar."; // Com operador ternário

// FORMULÁRIOS

// echo "<div>";
// echo "Digite seu nome: <br><br>";
// echo "<input type = text name = nome>";
// echo "<input type = submit value ='Enviar'>";
// echo "</div>";

?>