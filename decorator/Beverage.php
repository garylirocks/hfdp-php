<?php

namespace decorator;

/**
 * The basic beverage class.
 * 
 * @author Li Guisheng (http://guisheng.li)
 * @date Jan 7, 2014
 */
abstract class Beverage {
	protected $description;
	
	public function getDescription() {
		return $this->description;
	}
	
	public abstract function cost();
}