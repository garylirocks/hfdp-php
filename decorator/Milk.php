<?php

namespace decorator;

/**
 * A decorator class that wraps another beverage class.
 * 
 * @author Li Guisheng (http://guisheng.li)
 * @date Jan 7, 2014
 */
class Milk extends CondimentDecorator {
	public function __construct(Beverage $beverage) {
		$this->beverage = $beverage;
	}
	
	public function getDescription() {
		return $this->beverage->getDescription() . ', Milk';
	}
	
	public function cost() {
		return $this->beverage->cost() + '0.99';
	}
}