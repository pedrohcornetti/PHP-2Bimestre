<?php

    require_once "../index/cabecalho.php";

    // Verifica se os dados foram postados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = [];

    // Coleta os números do formulário
    for ($i = 1; $i <= 7; $i++) {
        $numeros[] = $_POST["numero$i"];
    }

    // Utiliza a função para encontrar o menor número e sua posição
    $resultado = encontrarMenorEPosicao($numeros);

    // Exibe o resultado
    echo "O menor valor é: " . $resultado['menor'] . "<br>";
    echo "A posição do menor valor é: " . $resultado['posicao'] . "<br>";
} else {
    // Redireciona de volta para o formulário se não houver dados POST
    header("Location: entrada.php");
}
    require_once "../index/rodape.php";