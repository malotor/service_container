<?php

namespace malotor\service_container;

use Symfony\Component\Yaml\Parser;

class ServiceContainer {
 
  private $services = array();

  const SERVICES_FILE = './services.yml';

  public function __construct() {

  	$yaml = new Parser();
		$this->services = $yaml->parse(file_get_contents(self::SERVICES_FILE));

  }

	public function getService($serviceName, $args = array() ) {
		$ref = new \ReflectionClass($this->services[$serviceName]);
		return $ref->newInstanceArgs($args);	
	}
 
}