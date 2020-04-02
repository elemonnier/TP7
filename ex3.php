<?php

trait Un {
    public function small($text){
        echo "<small>".$text."</small>";
    }
    public function big($text){
        echo "<h4>".$text."</h4>";
    }
}

trait Deux {
    public function small($text){
        echo "<i>".$text."</i>";
    }
    public function big($text){
        echo "<h2>".$text."</h2>";
    }
}

class Texte {
    use Un, Deux {
        Deux::small insteadof Un;
        Un::big insteadof Deux;
        Deux::big as gros;
        Un::small as petit;
    }
}

$texte = new Texte();
$texte->small("Bonjour");
$texte->petit(" à");
$texte->gros(" tous");
$texte->big(" !!!");