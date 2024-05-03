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
    //exercício 5
    function fatorial($valor1){
        $fatorial = 1;
        for ($i = $valor1; $i > 0; $i--) {
            $fatorial = $fatorial * $i;
        } 
        return $fatorial;
    }
    //exercício 6
    function valorCresceten($valorA, $valorB){
        if($valorA > $valorB)
            return "Valores em ordem crescente: $valorB - $valorA";
        elseif($valorB > $valorA)
            return "Valores em ordem crescente: $valorA - $valorB";
        else
            return "Números iguais: $valorA";
    }
    //exercício 7
    function converterMetros($valor1){
        $cm = $valor1 * 100;
        return "$valor1 m em centímeros, equivale a : $cm cm";
    }
    //exercício 8
    function qtdeLatas($area){
        $tinta = ($area / 3);
        $lata = ceil($tinta/18); //ceil - arredonda para cima
        $total = ($lata * 80); 

        return "A quantidade de lata(s) de tinta necessária(s) são: $lata<br>Preço total: R$ ".number_format($total, 2, ',', '.');
    }
    //exercício 9
    function idade($ano, $ano_atual){
        $qtdanos = $ano_atual - $ano;
        $qtdias = $qtdanos * 365;
        $idade = 2025 - $ano;

        return "Você já viveu $qtdanos anos <br> Você já viveu $qtdias dias <br> Em 2025, você terá $idade anos.";
    }
    //exercício 10
    function imc($peso, $altura){
        $imc = $peso / ($altura**2);
        $imc_formatado = number_format($imc, 2, '.', '');
        
        if ($imc > 24.9){
            return "Seu IMC é $imc, acima do peso ideal. :/ <a href='https://www.tuasaude.com/imc/'> Leia mais aqui! </a>";
        }
    
        elseif($imc < 18.6){
            return "Seu IMC é $imc, abaixo do peso ideal. :/ <a href='https://www.tuasaude.com/imc/'> Leia mais aqui! </a>";
    
        }
        
        else{
            return "Seu IMC é $imc, portanto está no peso ideal. :) <a href='https://www.tuasaude.com/imc/'> Leia mais aqui! </a>";
        }
    }
    
?>
     