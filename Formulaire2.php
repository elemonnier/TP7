<?php

include 'C:\Users\upupu\OneDrive\Bureau\CIR2\INFORMATIQUE\PHP\TP6\formulaire.php';

class Formulaire {
    public function __construct($method = 'post', $nomFichier = 'testFormulaire.php'){
        echo "<form method='".$method."' action='".$nomFichier."'>";
    }
    public function ajouterZoneTexte($text = 'text'){
        echo "<strong>$text"." </strong>
              <input type='text'>
              <br><br>";
    }
    public function ajouterBouton($text = 'text'){
        echo "<input type='submit' value='".$text."'>";
    }
    public function getForm(){
        echo "</form>";
    }
}

class Formulaire2 extends Formulaire {
    public function ajouterCaseACocher($text = "text"){
        echo "<input type='checkbox'>  ".$text;
    }
    public function ajouterBoutonRadio($text = "text"){
        echo "<input type='radio' name='a'>  ".$text;
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

?>