<?php
include_once 'Circle.php';
include_once 'Cylinder.php';

$circle = new Circle(5,'red');
echo $circle . '<br>';
$cylinder = new Cylinder(4,3,'Black');
echo $cylinder;
