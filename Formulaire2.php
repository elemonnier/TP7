<?php

include 'C:\Users\upupu\OneDrive\Bureau\CIR2\INFORMATIQUE\PHP\TP6\formulaire.php';

class Formulaire {
    public function __construct($method = 'post', $nomFichier = 'testFormulaire.php'){
        echo "<form method='".$method."' action='".$nomFichier."'>";
    }
    public function ajouterZoneTexte($text = 'text'){
        echo "<strong>$text"." </strong>";
        echo "<input type='text'>";
        echo "<br><br>";
    }
    public function ajouterBouton($text = 'text'){
        echo "<input type='submit' value='".$text."'>";
    }
    public function getForm(){
        echo "</form>";
    }
}

class Formulaire2 extends Formulaire {
    public function ajouterCaseACocher(){

    }
    public function ajouterBoutonRadio(){

    }
}