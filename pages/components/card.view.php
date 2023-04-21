<div class="flex" style="width: calc(50% - 20px); padding: 10px;">
    <div class="container-fluid">
        <div class="row">
            <div class="one column">
                <ion-icon class="icon-title" name="albums-outline"></ion-icon>
            </div>
            <div class="eleven columns">
                <div class="ml-1">
                    <h3 class="m-0 text-capitalize"><?= $data->nombre ?></h3>
                    <p class="paragraph">
                        <?= $data->descripcion ?>
                    </p>
                    <h4 class="green">Precio: S/.<?= number_format($data->precio,2) ?></h4>
                    <a href="productos/eliminar/<?= $data->idProducto ?>" class="button button-white">Eliminar</a>
                    <a href="productos/editar/<?= $data->idProducto ?>" class="button button-white">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
