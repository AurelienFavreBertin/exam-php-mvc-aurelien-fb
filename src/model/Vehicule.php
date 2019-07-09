<?php

class Vehicule extends Db {

    const TABLE_NAME = "vehicule";

    protected $id;
    protected $marque;
    protected $modele;
    protected $couleur;
    protected $immatriculation;



    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
        return $this;
    }

    public function setModele($modele) {
        $this->modele = $modele;
        return $this;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
        return $this;
    }

    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    public function save()
    {
        $data = [
            "marque"            => $this->getMarque(),
            "modele"            => $this->getModele(),
            "couleur"           => $this->getCouleur(),
            "immatriculation"   => $this->getImmatriculation()
        ];
        
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public function update()
    {
        if ($this->id > 0) {
            $data = [
                "id"                => $this->getId(),
                "marque"            => $this->getMarque(),
                "modele"            => $this->getModele(),
                "couleur"           => $this->getCouleur(),
                "immatriculation"   => $this->getImmatriculation()
            ];
            Db::dbUpdate(self::TABLE_NAME, $data);
            return $this;
        }
        return;
    }

    public function delete()
    {
        $data = [
            'id' => $this->getId(),
        ];

        Db::dbDelete(self::TABLE_NAME, $data);
        return;
    }

    public static function findAll() {
        $data = Db::dbFind(self::TABLE_NAME);

        // Au lieu de retourner un array de données brutes ($data),
        // on retourne un array d'objects de type Example :

        $vehicules = [];

        foreach($data as $d) {
            $vehicule = new Vehicule;
            $vehicule->setId($d['id']);
            $vehicule->setMarque($d['marque']);
            $vehicule->setModele($d['modele']);
            $vehicule->setCouleur($d['couleur']);
            $vehicule->setImmatriculation($d['immatriculation']);

            $vehicules[] = $vehicule;
        }

        return $vehicules;
    }

    public static function findOne(int $id)
    {
        $request = [
            ['id', '=', $id]
        ];
        $element = Db::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0) $element = $element[0];
        else return;

        $vehicule = new Vehicule;
        $vehicule->setId($element['id']);
        $vehicule->setmarque($element['marque']);
        $vehicule->setModele($element['modele']);
        $vehicule->setCouleur($element['couleur']);
        $vehicule->setImmatriculation($element['immatriculation']);

        return $vehicule;
    }
}