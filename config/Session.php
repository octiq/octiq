<?php

return [

    /**
     * This switch will tell Octiq to enable or disable
     * session capability. Leave this flag set to
     * false to completly disable localization functionalities
     */
	"enable" => true,

	/**
	 * We can configure the name for the session cookie
	 * that stored in the client's browser.
	 */
	"name" => "OCTIQ_SESID",

	/**
	 * This configuration can configure to adjust the session
	 * cookie life time.
	 */
	"cookie_lifetime" => 604800,

	/**
	 * This configuration used to define the garbage collector
	 * max lifetime to invalidate a session cookie.
	 */
	"gc_maxlifetime" => 604800


]

?>