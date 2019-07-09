<?php ob_start(); ?>

<form class="form" method="post" action="<?= url('associations/add') ?>" enctype="multipart/form-data">

    <div class="form-group">
        <label for="associationId_vehiculeFormAdd">id_vehicule</label>
        <input type="text" name="id_vehicule" id="associationId_vehiculeFormAdd" class="form-control">
    </div>

    <div class="form-group">
        <label for="associationId_conducteurFormAdd">id_conducteur</label>
        <input type="text" name="id_conducteur" id="associationId_conducteurFormAdd" class="form-control">
    </div>

    <input type="submit" value="Envoyer">
</form>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>