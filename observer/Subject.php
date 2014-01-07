<?php
namespace observer;

interface Subject {
	public function registerObserver(Observer $obj);
	public function removeObserver(Observer $obj);
	public function notifyObservers();
}