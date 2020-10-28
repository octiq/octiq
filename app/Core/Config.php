<?php
namespace Octiq\Core;

class Config {

	// PROPS
	private $store = array();

	/**
	 * Here is where we load configuration form flat files to
	 * our framework using include methods and we need to check
	 * if the file exists on the local storage before loading it
	 * to the configuration store.
	 */
    public function __get($key) {
		if ( array_key_exists($key, $this->store) ):
			return $this->store[$key];
		else:
			if ( file_exists(dirname(dirname(__DIR__)).'/config/'.ucfirst($key).'.php') ):
				$this->store[$key] = (Object)(include dirname(dirname(__DIR__)).'/config/'.ucfirst($key).'.php');
				return $this->store[$key];
			else:
				throw new \Exception("Configuration file not found");
			endif;
		endif;
    }


    /**
     * Static method to return configuration file by
     * just checking if it's exists or not.
     */
    public static function get($file) {
        if ( file_exists(dirname(dirname(__DIR__)).'/config/'.ucfirst($file).'.php') ):
            return (Object)(include dirname(dirname(__DIR__)).'/config/'.ucfirst($file).'.php');
        else:
            throw new \Exception("Configuration file not found");
        endif;
    }
}

?>