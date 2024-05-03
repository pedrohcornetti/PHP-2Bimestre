<?php
    require_once "../index/cabecalho.php";
?>
<form action="exer6resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valorA" class="form-label">Informe o valor A</label>
            <input type="number" name="valorA" id="valorA" class="form-control">
        </div>
        <div class="col">
            <label for="valorB" class="form-label">Informe o valor B</label>
            <input type="number" name="valorB" id="valorB" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
<?php
    require_once "../index/rodape.php";