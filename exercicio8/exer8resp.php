<?php

    require_once "../index/cabecalho.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $area = isset($_POST['area']) ? (int)$_POST['area'] : 0;

    $resultado = qtdeLatas($area);

    echo $resultado;
    }

    require_once "../index/rodape.php";