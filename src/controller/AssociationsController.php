<?php


class AssociationsController {


    public function list() {

        $associations = Association::findAll();

        view('associations.list', compact('associations'));
    }

    public function add() {

        $conducteurs = Conducteur::findAll();
        $vehicules   = Vehicule::findAll();
        
        view('associations.add', compact('conducteurs', 'vehicules'));
    }

    public function save() {

        $association = new Association;
        $association->setId_vehicule($_POST['id_vehicule']);
        $association->setId_conducteur($_POST['id_conducteur']);
        $association->save();

        redirectTo('associations');
    }

    // Route: GET associations/$id/edit
    public function edit($id)
    {
        $association = Association::findOne($id);
        view('associations.edit', compact('association'));
    }

    // Route: POST associations/$id/edit
    public function update($id)
    {
        $association = Association::findOne($id);
        $association->setId_vehicule($_POST['id_vehicule']);
        $association->setId_conducteur($_POST['id_conducteur']);
        $association->update();

        redirectTo('associations');
    }

    // Route: GET associations/$id/delete
    public function delete($id)
    {
        $association = Association::findOne($id);
        $association->delete();

        redirectTo('associations');
    }

}