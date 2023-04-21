<?= view("layout/header", ["title_page" => "CREAR PRODUCTOS"]) ?>
<div class="flex center-between">
    <div class="flex center-start">
        <img class="logo-img" src="https://www.leafphp.dev/logo-circle.png" alt="">
        <h2>Crear <span class="green">Producto</span></h2>
    </div>
</div>
<div class="container-fluid mt-3">
    <div class="card">
        <form action="<?=app()->getBasePath()?>productos/store" method="POST">
            <?php
                $success = flash()->display("success_forms");
                if ($success) {
                    view("components/flash-success",[
                        "success" => $success
                    ]);
                }
            ?>
            <div class="row">
                <div class="six columns">
                    <label for="inputNombre">Nombre</label>
                    <input class="u-full-width" type="text" name="inputNombre" id="inputNombre">
                </div>
                <div class="three columns">
                    <label for="inputPrecio">Precio</label>
                    <input class="u-full-width" type="number" step="0.01" name="inputPrecio" id="inputPrecio">
                </div>
                <div class="three columns">
                    <label for="inputStock">Stock</label>
                    <input class="u-full-width" type="number" step="1" value="0" name="inputStock" id="inputStock">
                </div>
            </div>
            <label for="inputDescription">Descripción</label>
            <textarea class="u-full-width" name="inputDescription" id="inputDescription"></textarea>
            <?php
                $error = flash()->display("error_forms");
                if ($error) {
                    view("components/flash-error",[
                        "errors" => explode(",",$error)
                    ]);
                }
            ?>
            <a href="<?=app()->getBasePath()?>" class="button button-white mr-1">Atras</a>
            <button type="submit" class="button-primary">Guardar</button>
        </form>
    </div>
</div>
<?= view("layout/footer") ?>
