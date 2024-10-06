<?php

abstract class Media {
    protected $titre;
    protected $auteur;
    private static $compteur = 0;

    public function __construct($titre, Auteur $auteur) {
        $this->setTitre($titre);
        $this->setAuteur($auteur);
        self::$compteur++;
    }

    // Setter pour le titre
    public function setTitre($titre) {
        $this->titre = $titre;
    }

    // Setter pour l'auteur
    public function setAuteur(Auteur $auteur) {
        $this->auteur = $auteur;
    }

    // Méthode statique pour compter le nombre total de médias
    public static function compterMedias() {
        return self::$compteur;
    }

    // Méthode magique __toString()
    public function __toString() {
        return "Titre : " . $this->titre . "\nAuteur : " . $this->auteur . "\n";
    }
}

class Auteur {
    private $nom;
    private $prenom;

    public function __construct($nom, $prenom) {
        $this->setNom($nom);
        $this->setPrenom($prenom);
    }

    // Setter pour le nom
    public function setNom($nom) {
        $this->nom = $nom;
    }

    // Setter pour le prénom
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function afficherNomComplet() {
        return $this->prenom . " " . $this->nom;
    }

    // Méthode magique __toString()
    public function __toString() {
        return $this->afficherNomComplet();
    }
}

class Livre extends Media {
    private $anneePublication;

    public function __construct($titre, Auteur $auteur, $anneePublication) {
        parent::__construct($titre, $auteur);
        $this->setAnneePublication($anneePublication);
    }

    // Setter pour l'année de publication
    public function setAnneePublication($anneePublication) {
        $this->anneePublication = $anneePublication;
    }

    // Méthode magique __toString()
    public function __toString() {
        return parent::__toString() . "Type : Livre\nAnnée de publication : " . $this->anneePublication . "\n";
    }
}

class Ebook extends Media {
    private $tailleFichier;

    public function __construct($titre, Auteur $auteur, $tailleFichier) {
        parent::__construct($titre, $auteur);
        $this->setTailleFichier($tailleFichier);
    }

    // Setter pour la taille du fichier
    public function setTailleFichier($tailleFichier) {
        $this->tailleFichier = $tailleFichier;
    }

    // Méthode magique __toString()
    public function __toString() {
        return parent::__toString() . "Type : Ebook\nTaille du fichier : " . $this->tailleFichier . " Mo\n";
    }
}

class Audiobook extends Media {
    private $duree;

    public function __construct($titre, Auteur $auteur, $duree) {
        parent::__construct($titre, $auteur);
        $this->setDuree($duree);
    }

    // Setter pour la durée
    public function setDuree($duree) {
        $this->duree = $duree;
    }

    // Méthode magique __toString()
    public function __toString() {
        return parent::__toString() . "Type : Audiobook\nDurée : " . $this->duree . " minutes\n";
    }
}

// Création des auteurs
$auteur1 = new Auteur("Hugo", "Victor");
$auteur2 = new Auteur("Verne", "Jules");

// Création des médias
$livre1 = new Livre("Les Misérables", $auteur1, 1862);
$ebook1 = new Ebook("Vingt mille lieues sous les mers", $auteur2, 5);
$audiobook1 = new Audiobook("Notre-Dame de Paris", $auteur1, 720);

// Affichage des détails des médias
echo $livre1;
echo "\n";
echo $ebook1;
echo "\n";
echo $audiobook1;
echo "\n";

// Affichage du nombre total de médias créés
echo "Nombre total de médias : " . Media::compterMedias() . "\n";

?>
