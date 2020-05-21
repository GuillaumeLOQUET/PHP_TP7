<?php
trait Un {
    public function small($value){
        echo "<small>$value</small>";
    }
    public function big($value){
        echo "<h4>$value</h4>";
    }
}

trait Deux {
    public function small($value){
        echo "<i>$value</i>";
    }
    public function big($value){
        echo "<h2>$value</h2>";
    }
}

class Texte {
    use Un, Deux{
        Un::big insteadof Deux ;
        Deux::small insteadof Un;
        Un::small as petit;
        Deux::big as gros;
    }

}

$test = new Texte();
$test->small("Test1");
$test->big("Test2");
$test->petit("Test3");
$test->gros("Test4");