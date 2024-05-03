<?php

    require_once "../index/cabecalho.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorA = isset($_POST['valorA']) ? (int)$_POST['valorA'] : 0;
        $valorB = isset($_POST['valorB']) ? (int)$_POST['valorB'] : 0;

    // Chamada da função
    $resultado = valorCresceten($valorA, $valorB);

    echo $resultado;
    } 
    require_once "../index/rodape.php";