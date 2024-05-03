<?php

    require_once "../index/cabecalho.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ano = isset($_POST['ano']) ? (int)$_POST['ano'] : 0;
        $ano_atual = isset($_POST['ano_atual']) ? (int)$_POST['ano_atual'] : 0;

    $resultado = idade($ano, $ano_atual);

    echo $resultado;
    } 
    require_once "../index/rodape.php";