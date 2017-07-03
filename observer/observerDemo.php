<?php
namespace observer;

include '../init.php';

$subject = new MySubject();
$observer = new MyObserver($subject);

// NOTE this observer has already been registered, it can not be registered again
$subject->registerObserver($observer);

$subject->setSpeed(10);
$subject->removeObserver($observer);

// NOTE observer already removed, no observer here
$subject->setSpeed(20);
