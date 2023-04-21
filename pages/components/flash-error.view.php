<div class="container-fluid alert-error">
    <h5>Up! Hubo errores al guardar el registro.</h5>
    <p>Errores:</p>
    <ul>
        <?php foreach($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
</div>
