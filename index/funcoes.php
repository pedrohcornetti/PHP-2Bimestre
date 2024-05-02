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

    function triploSoma($valor1, $valor2){
        if($valor1 == $valor2){
            return ($valor1 + $valor2) * 3;
        }else{
            return $valor1 + $valor2;
        }
    }   
    