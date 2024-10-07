<?php
require 'includes/fonctions.php';

/**
 * Vérifie si un tableau contient des doublons.
 *
 * @param array<int> $tableau Le tableau à examiner.
 * @return bool Retourne true s'il y a un doublon, false sinon.
 */
function contientDoublon(array $tableau): bool
{
    // Tableau associatif pour suivre les éléments déjà vus
    $elementsVus = [];

    // Parcourt chaque élément du tableau
    foreach ($tableau as $element) {
        // Vérifie si l'élément a déjà été vu
        if (isset($elementsVus[$element])) {
            return true; // Doublon trouvé
        }
        // Marque l'élément comme vu
        $elementsVus[$element] = true;
    }

    // Aucun doublon trouvé
    return false;
}

// Génération du tableau d'entiers de manière aléatoire
// avec la fonction tabAlea
try {
    $tableau = tabAlea(5, 1, 50);
    var_dump($tableau);
	if (contientDoublon($tableau)) {
		echo "Doublon présent";
	} else {
		echo "Pas de doublon !";
	}
} catch (InvalidArgumentException $e) {
    echo 'Erreur : ' . $e->getMessage();
}

