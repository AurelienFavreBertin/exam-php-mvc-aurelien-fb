<?php ob_start(); ?>

<h1>Bienvenue !</h1>

<p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis minus quia perspiciatis aperiam. Voluptates aliquam incidunt, quo eos quisquam asperiores perspiciatis delectus est et! Nemo quia sed laboriosam fugiat assumenda!
</p>

<ul>
    <li><a href="<?= url('students') ?>">Liste des étudiants</li>
    <li><a href="<?= url('courses') ?>">Liste des cours</li>
    <li><a href="<?= url('registrations') ?>">Liste des inscriptions</li>
</ul>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>