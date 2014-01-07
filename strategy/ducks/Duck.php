<?php

namespace strategy\ducks;

use strategy\behavior\FlyBehavior;

abstract class Duck {
	protected $flyBehavior;
	
	/**
	 * Change a duck's fly behavior at run time
	 * 
	 * @param FlyBehavior $flyBehavior
	 */
	public function setFlyBehavior(FlyBehavior $flyBehavior) {
		$this->flyBehavior = $flyBehavior;
	}
	
	public function fly() {
		$this->flyBehavior->fly();
	}
	
	public function swim() {
		echo 'a duck swims' . PHP_EOL;
	}
	
	abstract public function display();
}