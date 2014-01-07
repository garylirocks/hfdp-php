<?php

namespace decorator;

include '../init.php';

$milkTea = new Milk(new Tea());

echo $milkTea->getDescription() . PHP_EOL;
echo $milkTea->cost() . PHP_EOL;
