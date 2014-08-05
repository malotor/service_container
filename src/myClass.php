<?php

namespace malotor\service_container;

class myClass {

	private $mailer;

	public function __construct($serviceMailer) {

		$this->mailer = $serviceMailer;

	}	

	public function myMethod() {

		$this->mailer->sendMail();
	
	} 


  public static function create(iServiceContainer $container) {
    
    return new static(
      // Load the service required to construct this class.
      $container->getService('mailer')
    );
  }

}
