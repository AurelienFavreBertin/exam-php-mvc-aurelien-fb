<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('vehicules') ?>">
    Retour</a>
<form action="<?= url('vehicules/' . $vehicule->getId() . '/edit') ?>" method="post">

    <div class="form-group">
        <label for="vehiculeMarqueFormAdd">Marque</label>
        <input type="text" name="marque" id="vehiculeMarqueFormAdd" class="form-control" value="<?= $vehicule->getMarque() ?>">
    </div>

    <div class="form-group">
        <label for="vehiculeModelFormAdd">Modele</label>
        <input type="text" name="modele" id="vehiculeModelFormAdd" class="form-control" value="<?= $vehicule->getModele() ?>">
    </div>

    <div class="form-group">
        <label for="vehiculeCouleurFormAdd">Couleur</label>
        <input type="text" name="couleur" id="vehiculeCouleurFormAdd" class="form-control" value="<?= $vehicule->getCouleur() ?>">
    </div>

    <div class="form-group">
        <label for="vehiculeImmatriculationFormAdd">Immatriculation</label>
        <input type="text" name="immatriculation" id="vehiculeImmatriculationFormAdd" class="form-control" value="<?= $vehicule->getImmatriculation() ?>">
    </div>

    <button class="btn btn-warning float-right">Mettre à jour</button>
</form>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>