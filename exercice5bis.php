<?php
/**
 * Vérifie si un tableau est trié par ordre croissant en utilisant une boucle while.
 * On parcourt le tableau tant qu'on n'est pas à la fin 
 * et qu'un élément n'est pas mal placé (ordre croissant)
 *
 * @param array<int> $array Le tableau à examiner.
 * @return bool Retourne true si le tableau est trié par ordre croissant, false sinon.
 */
function estTrieEnCroissant(array $array): bool
{
    // Si le tableau est vide ou contient un seul élément, il est considéré comme trié
    if (count($array) <= 1) {
        return true;
    }

    // Initialisation de l'index
    $i = 1;

    // Boucle while qui continue tant qu'on n'a pas trouvé d'élément mal placé
    while ($i < count($array) && $array[$i - 1] <= $array[$i]) {
        $i++; // Continue à vérifier les éléments suivants
    }

    // Si on est arrivé à la fin du tableau, cela signifie qu'il est trié
    return $i === count($array);
}

// Exemple d'utilisation
$tableau = [1, 2, 3, 4, 5];
if (estTrieEnCroissant($tableau)) {
    echo "Le tableau est trié en ordre croissant.";
} else {
    echo "Le tableau n'est pas trié en ordre croissant.";
}