<?php


class Formulaire2 extends Formulaire {
    function ajouterRadio($sond, $labelOption,$option){
        echo " $labelOption :<input type='radio' name='$sond' value='$option' ><br>";
    }
    function ajouterCheckbox($sond,$labelOption, $option){
        echo " $labelOption :<input type='checkbox' name='".$sond."[]' value='$option'><br>";
    }
}