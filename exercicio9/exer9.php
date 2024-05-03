<?php
    require_once "../index/cabecalho.php";
?>
<form action="exer9resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="ano" class="form-label">Informe o ano que você nasceu</label>
            <input type="number" name="ano" id="ano" class="form-control">
        </div>
        <div class="col">
            <label for="ano_atual" class="form-label">Informe o ano atual</label>
            <input type="number" name="ano_atual" id="ano_atual" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
<?php
    require_once "../index/rodape.php";