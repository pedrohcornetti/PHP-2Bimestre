<?php

    function exibirData(){
        echo "Hoje é dia ".date("d");
    }

    function somar($n1 , $n2){
        return $n1 + $n2;
    }

    function subtrair($n1 , $n2){
        return $n1 - $n2;
    }

    function multiplicar($n1 , $n2){
        return $n1 * $n2;
    }

    function dividir($n1 , $n2){
        return $n1 / $n2;
    }
    //exercício 1
    function positivoNegativo($v){
        if($v > 0){
            return "Valor positivo!";
        }else if($v < 0){
            return "Valor negativo!";
        }else{
            return "Igual a zero!";
        }
    }
    //exercício 2
    function encontrarMenorEPosicao($numeros) {
        // Encontra o menor valor no array
        $menorValor = min($numeros);

        // Encontra a posição do menor valor no array
        $posicaoMenorValor = array_search($menorValor, $numeros) + 1; // +1 para ajustar para base 1

        return array('menor' => $menorValor, 'posicao' => $posicaoMenorValor);
    }
    //exercício 3
    function calcularSomaEspecial($valor1, $valor2) {
        $soma = $valor1 + $valor2;

        if ($valor1 == $valor2) {
            return $soma * 3;
        } else {
            return $soma;
        }
    }
    //exercício 4
    function tabuada($valor1){
        for ($i = 1; $i <= 10; $i++  ) {
            $tabuada = $valor1 * $i;
            echo "$valor1 x $i = $tabuada <br>";
        }
    }
    
?>
     