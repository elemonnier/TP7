<?php

include "formulaire.php";

class Formulaire2 extends Formulaire {
    public function ajouterCaseACocher($text = "text"){
        echo "<input type='checkbox'>  ".$text."<br>";
    }
    public function ajouterBoutonRadio($text = "text"){
        echo "<input type='radio' name='a'>  ".$text."<br>";
    }
}

$form2 = new Formulaire2();
$form2->ajouterZoneTexte("Votre nom :");
$form2->ajouterZoneTexte("Votre code : ");
$form2->ajouterBouton("Envoyer");
$form2->ajouterBoutonRadio("Homme");
$form2->ajouterBoutonRadio("Femme");
$form2->ajouterCaseACocher("Tennis");
$form2->ajouterCaseACocher("Equitation");
$form2->getForm();