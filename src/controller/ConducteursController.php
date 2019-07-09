<?php


class ConducteursController {


    public function list() {

        $conducteurs = Conducteur::findAll();

        view('conducteurs.list', compact('conducteurs'));
    }

    public function add() {

        view('conducteurs.add');
    }

    public function save() {

        $conducteur = new Conducteur;
        $conducteur->setPrenom($_POST['prenom']);
        $conducteur->setNom($_POST['nom']);
        $conducteur->save();

        redirectTo('conducteurs');
    }

    // Route: GET conducteurs/$id/edit
    public function edit($id)
    {
        $conducteur = Conducteur::findOne($id);
        view('conducteurs.edit', compact('conducteur'));
    }

    // Route: POST conducteurs/$id/edit
    public function update($id)
    {
        $conducteur = Conducteur::findOne($id);
        $conducteur->setPrenom($_POST['prenom']);
        $conducteur->setNom($_POST['nom']);
        $conducteur->update();

        redirectTo('conducteurs');
    }

    // Route: GET conducteurs/$id/delete
    public function delete($id)
    {
        $conducteur = Conducteur::findOne($id);
        $conducteur->delete();

        redirectTo('conducteurs');
    }

}