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

    function positivoNegativo($v){
        if($v > 0){
            return "Valor positivo!";
        }else if($v < 0){
            return "Valor negativo!";
        }else{
            return "Igual a zero!";
        }
    }

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    if ($valor1 == $valor2) {
        $valortriplo = ($valor1 + $valor2) * 3;  
        echo "O triplo da somatória entre os dois é $valortriplo";
    } else {
        $valorsoma = $valor1 + $valor2;
        echo "A soma dos dois valores é $valorsoma";
    }