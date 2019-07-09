<?php ob_start(); ?>

<form class="form" method="post" action="<?= url('vehicules/add') ?>" enctype="multipart/form-data">

    <div class="form-group">
        <label for="vehiculeMarqueFormAdd">Marque</label>
        <input type="text" name="marque" id="vehiculeMarqueFormAdd" class="form-control">
    </div>

    <div class="form-group">
        <label for="vehiculeModelFormAdd">Modele</label>
        <input type="text" name="modele" id="vehiculeModelFormAdd" class="form-control">
    </div>

    <div class="form-group">
        <label for="vehiculeCouleurFormAdd">Couleur</label>
        <input type="text" name="couleur" id="vehiculeCouleurFormAdd" class="form-control">
    </div>

    <div class="form-group">
        <label for="vehiculeImmatriculationFormAdd">Immatriculation</label>
        <input type="text" name="immatriculation" id="vehiculeImmatriculationFormAdd" class="form-control">
    </div>

    <input type="submit" value="Envoyer">
</form>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>