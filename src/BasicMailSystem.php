<?php

namespace malotor\service_container;

class BasicMailSystem  implements mailSystem {
	
	public function sendMail() {

		/* Code here */
		echo "You have sent an email! using " . get_class($this) . "\n";

			
	}
}