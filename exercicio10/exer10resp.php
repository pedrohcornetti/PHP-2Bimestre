<?php

    require_once "../index/cabecalho.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = isset($_POST['peso']) ? (float)$_POST['peso'] : 0;
        $altura = isset($_POST['altura']) ? (float)$_POST['altura'] : 0;

    $resultado = imc($peso, $altura);

    echo $resultado;
    } 
    require_once "../index/rodape.php";