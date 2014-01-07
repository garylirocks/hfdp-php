<?php
define('ROOT', dirname(__FILE__));

function myAutoLoader($className) {
	$classPath = ROOT . DIRECTORY_SEPARATOR 
				. preg_replace(':\\\\:', DIRECTORY_SEPARATOR, $className) . ".php";
    include $classPath;
}

spl_autoload_register('myAutoLoader');