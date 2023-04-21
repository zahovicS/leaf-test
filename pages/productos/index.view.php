<?= view("layout/header",["title_page"=>"MIS PRODUCTOS"]) ?>
<div class="flex center-between">
    <div class="flex center-start">
        <img class="logo-img" src="https://www.leafphp.dev/logo-circle.png" alt="">
        <h2>Mis Productos - Total: <span class="green"><?= count($productos) ?></span></h2>
    </div>
    <div class="action">
        <a href="<?=app()->getBasePath()?>productos/crear" class="button button-white">Agregar</a>
    </div>
</div>
<div class="flex card mt-3">
    <div class="container-fluid">
        <input type="search" id="inputSearch" class="u-full-width" placeholder="Buscar">
    </div>
    <?php
        $success = flash()->display("success_forms");
        if ($success) {
            view("components/flash-success",[
                "success" => $success
            ]);
        }
    ?>
    <div class="flex card p-0" id="search_response">
        <?php foreach($productos as $producto){
            view('components/card',["data" => $producto]);
        } ?>
    </div>
</div>
<script src="<?=app()->getBasePath()?>pages/assets/js/productos/main.js"></script>
<?= view("layout/footer") ?>
