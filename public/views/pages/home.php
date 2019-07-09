<?php ob_start(); ?>

<h1>Bonjour Thomas</h1>
<p>Entreprise UTC</p>

<ul>
    <li><a href="<?= url('conducteurs') ?>">Liste des conducteurs</li>
    <li><a href="<?= url('vehicules') ?>">Liste des vehicules</li>
    <li><a href="<?= url('associations') ?>">Liste des associations</li>
</ul>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>