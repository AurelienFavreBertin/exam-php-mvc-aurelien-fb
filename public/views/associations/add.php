<?php ob_start(); ?>

<form class="form" method="post" action="<?= url('associations/add') ?>" enctype="multipart/form-data">


    <div class="form-group">
        <label for="aForm">Choix du véhicule</label>
        <select name="id_vehicule" id="aForm" class="form-control">
            <option selected disabled>Choisir un véhicule</option>
            <?php foreach ($vehicules as $vehicule) : ?>
                <option value="<?= $vehicule->getId() ?>"><?= $vehicule->getMarque(); ?> (<?= $vehicule->getModele(); ?>)</option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="bForm">Choix du conducteur</label>
        <select name="id_conducteur" id="bForm" class="form-control">
            <option selected disabled>Choisir un conducteur</option>
            <?php foreach ($conducteurs as $conducteur) : ?>
                <option value="<?= $conducteur->getId() ?>"><?= $conducteur->getNom(); ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <input type="submit" value="Envoyer">
</form>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>