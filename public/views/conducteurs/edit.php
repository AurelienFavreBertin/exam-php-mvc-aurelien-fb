<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('conducteurs') ?>">
    Retour</a>
<form action="<?= url('conducteurs/' . $conducteur->getId() . '/edit') ?>" method="post">

    <div class="form-group">
        <label for="conducteurNameForm">Prenom</label>
        <input type="text" name="prenom" id="conducteurNameForm" class="form-control" value="<?= $conducteur->getPrenom() ?>">
    </div>

    <div class="form-group">
        <label for="conducteurEmailForm">Nom</label>
        <input type="text" name="nom" id="conducteurEmailForm" class="form-control" value="<?= $conducteur->getNom() ?>">
    </div>

    <button class="btn btn-warning float-right">Mettre à jour</button>
</form>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>