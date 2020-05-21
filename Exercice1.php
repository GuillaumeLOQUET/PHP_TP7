<?php
include('Formulaire.php');
include('Formulaire2.php');


$formul1 = new Formulaire2("post", "Exercice1.php");
$formul1->ajouterZoneText("Nom","nom");
$formul1->ajouterZoneText("","code");
$formul1->ajouterRadio("civilite","Homme ","homme");
$formul1->ajouterRadio("civilite","Femme ","femme");
$formul1->ajouterCheckbox("sport","Natation ","Natation");
$formul1->ajouterCheckbox("sport","Athletisme ","Athletisme");
$formul1->ajouterBouton();
$formul1->getForm();


if (isset($_POST['nom']) && isset($_POST['code']) && isset($_POST['civilite'])) {
    echo $_POST['nom'] . "<br>";
    echo $_POST['code'] . "<br>";
    echo $_POST['civilite'] . "<br>";
    $tab = $_POST['sport'];
    foreach ( $tab as $value){
        echo "$value ";
    }
}