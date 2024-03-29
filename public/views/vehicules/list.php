<?php ob_start(); ?>

<!-- Contenu de la vue -->
<a href="<?= url('') ?>">
    < Retour à la page d'accueil</a> <br><br>
        <a href="<?= url('vehicules/add') ?>" class="btn btn-sm btn-primary">Ajouter</a><br><br>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>marque</th>
                    <th>modele</th>
                    <th>couleur</th>
                    <th>immatriculation</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach ($vehicules as $vehicule) : ?>
                    <tr>
                        <td><?= $vehicule->getId(); ?></td>
                        <td><?= $vehicule->getMarque(); ?></td>
                        <td><?= $vehicule->getModele(); ?></td>
                        <td><?= $vehicule->getCouleur(); ?></td>
                        <td><?= $vehicule->getImmatriculation(); ?></td>
                        <td><a href="<?= url('vehicules/' . $vehicule->getId() . '/edit') ?>" class="btn btn-warning btn-sm">Éditer</a></td>
                        <td><a href="<?= url('vehicules/' . $vehicule->getId() . '/delete') ?>" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous supprimer cet élément ?')">Supprimer</a></td>
                    </tr>
                <?php endforeach; ?>
                </tr>
            </tbody>
        </table>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>