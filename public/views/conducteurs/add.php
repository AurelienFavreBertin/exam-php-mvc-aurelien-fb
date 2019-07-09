<?php ob_start(); ?>

<form class="form" method="post" action="<?= url('conducteurs/add') ?>" enctype="multipart/form-data">

    <div class="form-group">
        <label for="conducteurNameFormAdd">Prenom</label>
        <input type="text" name="prenom" id="conducteurNameFormAdd" class="form-control">
    </div>

    <div class="form-group">
        <label for="conducteurEmailFormAdd">Nom</label>
        <input type="text" name="nom" id="conducteurEmailFormAdd" class="form-control">
    </div>

    <input type="submit" value="Envoyer">
</form>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>