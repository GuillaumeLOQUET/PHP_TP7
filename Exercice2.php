<?php
include('Shape.php');
include('Circle.php');
include('Square.php');

$sq = new Square(8,9);
$circle = new circle(4);
$tab = array($sq,$circle);

foreach ($tab as $value){
    $value->getArea();
    echo "<br>";
}