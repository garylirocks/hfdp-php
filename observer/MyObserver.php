<?php

namespace observer;

class MyObserver implements Observer {
	private $subject;
	
	public function __construct(Subject $aSubject) {
		$this->subject = $aSubject;
		$aSubject->registerObserver($this);
	}
	
	public function update() {
		echo 'speed observer: the speed is now ' . $this->subject->getSpeed() . PHP_EOL;
	}
}
