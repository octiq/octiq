<?php
namespace Octiq\Core;

class Session {

	protected $_registry = null;

    /**
     * This will initialize new $_SESSION
     */
    public function __construct(Registry $Registry) {
		$this->_registry = $Registry;

		/**
		 * Check if the session is enabled in the configuration
		 * and act according to it to enable /disable session
		 */
		if ( $this->_registry->config->session->enable ):
			session_start([
				"name"				=> $this->_registry->config->session->name,
				"cookie_lifetime"	=> $this->_registry->config->session->cookie_lifetime,
				"gc_maxlifetime"	=> $this->_registry->config->session->gc_maxlifetime
			]);
		endif;

		// var_dump( $this->_registry->config->session );

    }



    /**
     * This is the getter that helps to return elements
     * from $_SESSION.
     */
    public function __get($key) {
        if ( $this->has($key) ):
            return $_SESSION[$key];
        else:
            return NULL;
        endif;
    }



    /**
     * This is the setter that set the key, element pairs
     * into the session params,
     */
    public function __set($key, $element) {
        $_SESSION[$key] = $element;
    }



    /**
     * This method will remove the key, value pair from the
     * session params.
     */
    public function forget($key) {
        if ( $this->has($key) ):
            unset($_SESSION[$key]);
        endif;
    }



    /**
     * This method will check if the provided key
     * exists in the session
     */
    public function has($key) {
        if ( array_key_exists($key, $_SESSION) ):
            return true;
        else:
            return false;
        endif;
    }



    /**
     * This method will destroy the whole $_SESSION
     * array once called.
     */
    public function destroy() {
        session_destroy();
    }
}

?>