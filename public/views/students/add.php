<?php ob_start(); ?>

<form class="form" method="post" action="<?= url('students/add') ?>" enctype="multipart/form-data">
 
    <input class="form-control" type="text" name="name" id="">
    <input class="form-control" type="text" name="email" id="">
    <input type="submit" value="Envoyer">
</form>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>