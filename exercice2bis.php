<?php
/**
 * Exercice 2 de la feuille d'exercice
 *
 * PHP version 8.0
 * 
 * @category  Exercices
 * @package   RevisionPhp
 * @author    Sébastien Inion <contact@inion.info>
 * @copyright 2014 Inion Sébastien
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      https://www.inion-web.fr/?p=6518
 */

 require 'includes/fonctions.php';

// Génération du tableau d'entiers de manière aléatoire
// avec la fonction tabAlea
try {
    $tableau = tabAlea(5, 10, 50);
    var_dump($tableau);
    echo "Le plus grand nombre est : " . plusGrandTab(1);
    echo "Le plus petit nombre est : " . plusPetitTab($tableau);
} catch (InvalidArgumentException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
catch (TypeError $e) {
    // Capture et gestion de l'exception TypeError
    echo "Erreur : la fonction attend un tableau en argument";
}
