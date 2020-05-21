<?php


class Formulaire{
    function __construct($meth, $url) {
        echo "<form method='$meth' action='$url'>";
    }
    function ajouterZoneText($labelNom,$nom){
        echo " $labelNom <input type=\"text\" name=\"$nom\" ><br>";
    }
    function ajouterBouton(){
        echo "<input type=\"submit\" >";
    }
    function getform() {
        echo "</form>";
    }

}