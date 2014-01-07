<?php

namespace strategy;

use strategy\ducks\ModelDuck;
use strategy\behavior\FlyRocketPowered;

include '../init.php';

$modelDuck = new ModelDuck();

$modelDuck->display();
$modelDuck->swim();

$modelDuck->fly();
$modelDuck->setFlyBehavior(new FlyRocketPowered()); // change a duck's fly behavior dynamically
$modelDuck->fly();
