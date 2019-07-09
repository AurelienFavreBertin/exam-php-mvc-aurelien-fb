<?php
// Afficher le nb de conducteurs
SELECT COUNT(*) FROM conducteur

// Afficher le nb de vehicules
SELECT COUNT(*) FROM vehicule

// Afficher le nb d'associations
SELECT COUNT(*) FROM association_vehicule_conducteur

// Afficher les vehicules n'ayant pas de conducteurs
SELECT * FROM association_vehicule_conducteur
INNER JOIN vehicule
ON  id_vehicu l e = vehicule.id
INNER JOIN conducteur
ON  id_ c onducteur  =  conducteur.id
WHERE id_conducteur = ''

// Afficher les conducteurs n'ayant pas de vehicules
SELECT * FROM association_vehicule_conducteur
INNER JOIN vehicule
ON  id_vehicu l e = vehicule.id
INNER JOIN conducteur
ON  id_ c onducteur  =  conducteur.id
WHERE id_vehicule = ''

// Afficher les vehicules conduits par 'Philippe Pandre'
SELECT * FROM association_vehicule_conducteur
INNER JOIN vehicule
    ON  id_vehicule = vehicule.id
INNER JOIN conducteur
    ON  id_conducteur  =  conducteur.id
WHERE prenom = 'Philippe'

// Afficher les conducteurs et vehicules même sans correspondance
SELECT * FROM association_vehicule_conducteur
INNER JOIN vehicule
ON  id_vehicu l e = vehicule.id
Left JOIN conducteur
ON  id_ c onducteur  =  conducteur.id
