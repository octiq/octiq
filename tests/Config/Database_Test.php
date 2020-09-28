<?php

namespace Octiq\Tests\Config;
use PHPUnit\Framework\TestCase;
use Octiq\Core\Registry;
use Octiq\Core\Config;
use Octiq\Core\Database;

class Database_TestCase extends TestCase {

	// PROPS
	protected $database;


	// SETUP
	protected function setUp(): void {
        $Registry = new Registry;
        $Registry->set('config', new Config);
        $this->database = new Database($Registry);
	}


	public function test_Instance() {
		$this->assertInstanceOf(Database::class, $this->database);
	}

	public function test_isObject() {
		$this->assertIsObject($this->database);
	}

}

?>