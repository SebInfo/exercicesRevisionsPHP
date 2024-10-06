<?php
// Création du tableau multidimensionnel associatif
$etudiants = array(
    "Dupont" => array(
        "anglais" => 12,
        "francais" => 9,
        "math" => 8
    ),
    "Franck" => array(
        "anglais" => 2,
        "francais" => 19,
        "math" => 12
    ),
    "Alice" => array(
        "anglais" => 10,
        "francais" => 11,
        "math" => 10
    ),
    "Stephane" => array(
        "anglais" => 14,
        "francais" => 15,
        "math" => 18
    ),
    "Coralie" => array(
        "anglais" => 12,
        "francais" => 19,
        "math" => 5
    )
);

// Fonction pour calculer la moyenne et afficher les étudiants qui ont l'examen
foreach ($etudiants as $nom => $notes) {
    $moyenne = array_sum($notes) / count($notes); // Calcul de la moyenne
    if ($moyenne >= 10) { // Vérification si la moyenne est égale ou supérieure à 10
        $moyenne_formatee = number_format($moyenne, 2); // Formater la moyenne avec 2 chiffres après la virgule
        echo "$nom a obtenu l'examen avec une moyenne de $moyenne_formatee\n";
    }
}
?>
