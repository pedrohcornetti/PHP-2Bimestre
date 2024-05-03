<?php
    require_once "../index/cabecalho.php";
?>
<form action="exer2resp.php" method="post">
    <div class="row">
        <div class="col">
        <?php
        for ($i = 1; $i <= 7; $i++) {
            echo "<div>";
            echo "<label for='numero$i'>Número $i:</label>";
            echo "<input type='number' id='numero$i' name='numero$i' required>";
            echo "</div><br>";
        }
        ?>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
<?php
    require_once "../index/rodape.php";
