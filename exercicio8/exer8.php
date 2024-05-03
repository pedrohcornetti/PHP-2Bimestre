<?php
    require_once "../index/cabecalho.php";
?>
<form action="exer8resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="area" class="form-label">Informe o tamanho da área em m² :</label>
            <input type="number" name="area" id="area" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
<?php
    require_once "../index/rodape.php";