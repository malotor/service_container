<?php

namespace malotor\service_container;

class myClass {

	private $mailer;

	public function __construct($serviceContainter) {

		$this->mailer = $serviceContainter->getService('mailer');

	}	

	public function myMethod() {

		$this->mailer->sendMail();
	
	} 

}
