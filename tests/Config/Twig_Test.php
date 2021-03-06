<?php

namespace Octiq\Tests\Config;
use PHPUnit\Framework\TestCase;
use Octiq\Core\Registry;
use Octiq\Core\Config;

class Twig_TestCase extends TestCase {

	// PROPS
	protected $config;


	// SETUP
	protected function setUp(): void {
		$this->config = new Config(new Registry);
	}


	public function test_Instance() {
		$this->assertInstanceOf(Config::class, $this->config);
	}

	public function test_hasConfig() {
		$this->assertIsObject($this->config->twig);
	}

}

?>