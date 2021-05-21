<?php

include_once 'Point.php';
include_once 'MoveablePoint.php';

$point = new Point(1.5, 1.4);
echo $point . '<br>';
echo $point->getX() . '<br>';
$moveAblePoint = new MoveablePoint(2, 3, 5, 5);
echo $moveAblePoint . '<br>';
echo $moveAblePoint->getX() . '<br>';
echo $moveAblePoint->getYSpeed();