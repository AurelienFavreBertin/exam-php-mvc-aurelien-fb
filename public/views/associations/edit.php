<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('associations') ?>">
    Retour</a>
<form action="<?= url('associations/' . $association->getId() . '/edit') ?>" method="post">

    <div class="form-group">
        <label for="associationId_vehiculeForm">id_vehicule</label>
        <input type="text" name="id_vehicule" id="associationId_vehiculeForm" class="form-control" value="<?= $association->getId_vehicule() ?>">
    </div>

    <div class="form-group">
        <label for="associationId_conducteurForm">id_conducteur</label>
        <input type="text" name="id_conducteur" id="associationId_conducteurForm" class="form-control" value="<?= $association->getId_conducteur() ?>">
    </div>

    <button class="btn btn-warning float-right">Mettre à jour</button>
</form>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>