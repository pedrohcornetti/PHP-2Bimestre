<?php

    require_once "../index/cabecalho.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = isset($_POST['valor1']) ? (int)$_POST['valor1'] : 0;

    // Chamada da função
    $resultado = fatorial($valor1);

    echo "O fatorial de $valor1 é $resultado";
    }

    require_once "../index/rodape.php";