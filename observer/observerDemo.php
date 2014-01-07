<?php
namespace observer;

include '../init.php';

$subject = new MySubject();
$observer = new MyObserver();

$subject->registerObserver($observer);

$subject->setSpeed(10);

$subject->removeObserver($observer);

$subject->setSpeed(20);