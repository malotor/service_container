<?php

require dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use malotor\service_container\ServiceContainer;
use malotor\service_container\myClass;

$serviceContainer = new ServiceContainer();

$myClassIntance = new myClass($serviceContainer);
$myClassIntance->myMethod();
