<?php
$evenements = [
    "Formation PHP" => ["debut" => "2024-10-01", "fin" => "2024-10-15"],
    "Stage en entreprise" => ["debut" => "2024-11-01", "fin" => "2024-11-30"],
    "Examen final" => ["debut" => "2024-12-10", "fin" => "2024-12-12"],
];

$date_actuelle = date('Y-m-d');

foreach ($evenements as $nom => $dates) {
    $debut = strtotime($dates['debut']);
    $fin = strtotime($dates['fin']);
    $aujourd_hui = strtotime($date_actuelle);

    if ($aujourd_hui < $debut) {
        $etat = "À venir";
    } elseif ($aujourd_hui >= $debut && $aujourd_hui <= $fin) {
        $etat = "En cours";
    } else {
        $etat = "Terminé";
    }

    echo "$nom : $etat\n";
}
?>
