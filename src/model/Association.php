<?php

class Association extends Db
{

    const TABLE_NAME = "association_vehicule_conducteur";

    protected $id;
    protected $id_vehicule;
    protected $id_conducteur;


    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setId_vehicule($id_vehicule)
    {
        $this->id_vehicule = $id_vehicule;
        return $this;
    }

    public function setId_conducteur($id_conducteur)
    {
        $this->id_conducteur = $id_conducteur;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getId_vehicule()
    {
        return $this->id_vehicule;
    }
    public function getId_conducteur()
    {
        return $this->id_conducteur;
    }

    public function getVehicule()
    {
        $vehicule = Vehicule::findOne($this->getId_vehicule());
        return $vehicule;
    }
    public function getConducteur()
    {
        $conducteur = Conducteur::findOne($this->getId_conducteur());
        return $conducteur;
    }


    public function save()
    {
        $data = [
            "id_vehicule"      => $this->getId_vehicule(),
            "id_conducteur"    => $this->getId_conducteur()
        ];

        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public function update()
    {
        if ($this->id > 0) {
            $data = [
                "id"             => $this->getId(),
                "id_vehicule"    => $this->getId_vehicule(),
                "id_conducteur"  => $this->getId_conducteur()
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

    public static function findAll()
    {
        $data = Db::dbFind(self::TABLE_NAME);

        // Au lieu de retourner un array de données brutes ($data),
        // on retourne un array d'objects de type Example :

        $associations = [];

        foreach ($data as $d) {
            $association = new Association;
            $association->setId($d['id']);
            $association->setId_vehicule($d['id_vehicule']);
            $association->setId_conducteur($d['id_conducteur']);

            $associations[] = $association;
        }

        return $associations;
    }

    public static function findOne(int $id)
    {
        $request = [
            ['id', '=', $id]
        ];
        $element = Db::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0) $element = $element[0];
        else return;

        $association = new Association;
        $association->setId($element['id']);
        $association->setId_vehicule($element['id_vehicule']);
        $association->setId_conducteur($element['id_conducteur']);

        return $association;
    }
}
