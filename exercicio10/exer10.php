<?php
    require_once "../index/cabecalho.php";
?>
<form action="exer10resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="peso" class="form-label">Informe seu peso</label>
            <input type="number" name="peso" id="peso" class="form-control" step="any">
        </div>
        <div class="col">
            <label for="altura" class="form-label">Informe sua altura</label>
            <input type="number" name="altura" id="altura" class="form-control" step="any">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
<?php
    require_once "../index/rodape.php";