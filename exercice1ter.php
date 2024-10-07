<?php
/**
 * Ce fichier contient une fonction des exercices de révision PHP
 * pour générer un tableau de nombres aléatoires.
 *
 * PHP version 8.0
 * 
 * @category  Exercices
 * @package   RevisionPhp
 * @author    Sébastien Inion <contact@inion.info>
 * @copyright 2014 Inion Sébastien
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      https://www.inion-web.fr/?p=6518
 * */

/** 
 * Génère un tableau de nombres aléatoires.
 *
 * Cette fonction crée un tableau d'entiers contenant un nombre donné d'éléments,
 * chaque élément étant un entier aléatoire compris entre une valeur minimale
 * et une valeur maximale.
 *
 * @param int $nbrElement Le nombre d'éléments à générer dans le tableau.
 * @param int $valMin     La valeur minimale que peut prendre un élément.
 * @param int $valMax     La valeur maximale que peut prendre un élément.
 * 
 * @return array<int, int> Un tableau de nombres entiers aléatoires compris entre
 *                          $valMin et $valMax.
 * 
 * @throws InvalidArgumentException Si le nombre d'éléments est < ou = à zéro,
 *                                   ou sphphpi $valMin est supérieur à $valMax.
 */
function tabAlea(int $nbrElement, int $valMin, int $valMax):array
{
    // Validation des paramètres
    if ($nbrElement <= 0) {
        throw new InvalidArgumentException(
            'Le nombre d\'éléments doit être un entier positif.'
        );
    }

    if ($valMin > $valMax) {
        throw new InvalidArgumentException(
            'La valeur minimale doit être inférieure ou égale à la valeur maximale.'
        );
    }

    // Initialisation du tableau
    $tab = array();
    for ($i=0; $i<$nbrElement; $i++) {
        $tab[] = rand($valMin, $valMax);
    }
    return $tab;
}
// Appel de la fonction et affichage du tableau
// Avec gestion des erreurs
try {
    var_dump(tabAlea(5, 109, 50));
} catch (InvalidArgumentException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
