<?php
/**
 * Ce fichier contient les fonctions des exercices de révision PHP
 *
 * PHP version 8.0
 * 
 * @category  Exercices
 * @package   RevisionPhp0
 * @author    Sébastien Inion <contact@inion.info>
 * @copyright 2014 Inion Sébastien
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      https://www.inion-web.fr/?p=6518
 */

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

/**
 * Retourne le plus grand élément dans un tableau d'entier
 *
 * @param array<int> $tableau Le tableau d'entiers à examiner.
 * 
 * @return int Le plus grand nombre du tableau.
 * 
 * @throws InvalidArgumentException Si le tableau est vide.
 */
function plusGrandTab(array $tableau): int
{
    // Vérifie si le tableau est vide
    if (empty($tableau)) {
        throw new InvalidArgumentException('Le tableau ne doit pas être vide.');
    }

    // Initialisation du plus grand nombre avec le premier élément du tableau
    $plusGrand = $tableau[0];

    // Parcourt le tableau à partir du deuxième élément
    for ($i = 1; $i < count($tableau); $i++) {
        if ($tableau[$i] > $plusGrand) {
            $plusGrand = $tableau[$i]; // Met à jour le plus grand nombre
        }
    }

    return $plusGrand;
}

/**
 * Trouve le plus petit nombre dans un tableau d'entiers en utilisant une boucle for.
 *
 * @param array<int> $tableau Le tableau d'entiers à examiner.
 * 
 * @return int Le plus petit nombre du tableau.
 * 
 * @throws InvalidArgumentException Si le tableau est vide.
 */
function plusPetitTab(array $tableau): int
{
    // Vérifie si le tableau est vide
    if (empty($tableau) or !is_array($tableau)) {
        throw new InvalidArgumentException('Le tableau ne doit pas être vide.');
    }

    // Initialisation du plus petit nombre avec le premier élément du tableau
    $plusPetit = $tableau[0];

    // Parcourt le tableau à partir du deuxième élément
    for ($i = 1; $i < count($tableau); $i++) {
        if ($tableau[$i] < $plusPetit) {
            $plusPetit = $tableau[$i]; // Met à jour le plus petit nombre
        }
    }

    return $plusPetit;
}