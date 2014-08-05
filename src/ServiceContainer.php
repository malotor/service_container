<?php

namespace malotor\service_container;

use Symfony\Component\Yaml\Parser;

interface iServiceContainer {

	public function getService($serviceName, $args );

}

class ServiceContainer implements iServiceContainer{
 
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