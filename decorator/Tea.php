<?php
namespace decorator;

/**
 * Hot tea.
 * 
 * @author Li Guisheng (http://guisheng.li)
 * @date Jan 7, 2014
 */
class Tea extends Beverage {
	public function __construct() {
		$this->description = 'hot tea';
	}
	
	public function cost() {
		return 3.5;
	}
}