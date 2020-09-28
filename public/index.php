<?php

/**
 * This is the entry point of octiq/octiq framework.
 * This will start serving the request by handing over
 * it to the core.
 */
include_once '../app/init.php';
$App = new Octiq\Core\App;
$App::dispatch();

?>