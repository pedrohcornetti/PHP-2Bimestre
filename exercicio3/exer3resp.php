<?php

    require_once "../index/cabecalho.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = isset($_POST['valor1']) ? (int)$_POST['valor1'] : 0;
        $valor2 = isset($_POST['valor2']) ? (int)$_POST['valor2'] : 0;

    // Chamada da função
    $resultado = calcularSomaEspecial($valor1, $valor2);

    // Exibe o resultado
    echo "Resultado: $resultado";
    }

    require_once "../index/rodape.php";