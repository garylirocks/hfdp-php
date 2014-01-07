<?php

namespace observer;

class MySubject implements Subject {
	private $name;
	private $speed;
	
	public function registerObserver(Observer $obj) {
		if (isset($this->observers) && in_array($obj, $this->observers, true)) {
			echo '!!! the observer already defined' . PHP_EOL;
			return;
		}
		
		echo __CLASS__ . ' registered a new observer ' . get_class($obj) . PHP_EOL;
		$this->observers[] = $obj;
	}
	
	public function removeObserver(Observer $obj) {
		foreach ($this->observers as $key => $observerEntry) {
			if ($obj === $observerEntry) {
				unset($this->observers[$key]);
				echo __CLASS__ . ' removed an observer ' . get_class($obj) . PHP_EOL;
			}
		}
	}
	
	public function notifyObservers() {
		if (empty($this->observers)) {
			echo __CLASS__ . ' has no observers now' . PHP_EOL;
			return;
		}

		echo __CLASS__ . ' notify observers now ' . PHP_EOL;
		foreach ($this->observers as $obj) {
			$obj->update();
		}
	}
	
	public function setSpeed($speed) {
		$this->speed = $speed;
		$this->notifyObservers();
	}
	
	public function getSpeed() {
		return $this->speed;
	}
}