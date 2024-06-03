<?php include_once '../templates/header.php'; ?>

<h1 class="text-center">FORMULARIO DE PRODUCTOS</h1>
<div class="row justify-content-center">
    <form action="" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
            <label for="prod_nombre">Nombre del producto</label>
            <input type="text" name="prod_nombre" id="pord_nombre" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
            <label for="prod_precio">Nombre del producto</label>
            <input type="number" name="prod_precio" id="pord_precio" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary w-180">Guardar</button>
            </div>
        </div>
    </form>
</div>




<?php include_once '../templates/footer.php'; ?>