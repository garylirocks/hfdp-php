<?php

namespace strategy\ducks;

use strategy\behavior\FlyWithWings;

class ModelDuck extends Duck {
	public function __construct() {
		$this->flyBehavior = new FlyWithWings();
	}
	
	public function display() {
		echo 'hey, i am a duck, a model duck !' . PHP_EOL;		
	}
}