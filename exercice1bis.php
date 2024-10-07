<?php
/**
 * Génère un tableau de nombres aléatoires.
 *
 * Cette fonction crée un tableau d'entiers contenant un nombre donné d'éléments,
 * chaque élément étant un entier aléatoire compris entre une valeur minimale
 * et une valeur maximale.
 *
 * @param int $nbrElement Le nombre d'éléments à générer dans le tableau.
 * @param int $valMin La valeur minimale que peut prendre un élément.
 * @param int $valMax La valeur maximale que peut prendre un élément.
 * @return array Un tableau de nombres aléatoires compris entre $valMin et $valMax.
 */
function tabAlea(int $nbrElement, int $valMin, int $valMax):array
{
    // Initialisation du tableau
    $tab = array();
    for ($i=0; $i<$nbrElement; $i++) {
	    $tab[] = rand($valMin,$valMax);
    }
    return $tab;
}
var_dump(tabAlea(5,0,50));
?>