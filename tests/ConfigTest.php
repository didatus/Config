<?php

use Didatus\Config\Config;

/**
 * @coversDefaultClass \Didatus\Config\Config
 * @covers \Didatus\Config\Config
 */
class ConfigTest extends PHPUnit_Framework_TestCase {

    private $dummyConfig = [
        'database' => [
            'name' => 'test_database',
            'host' => 'localhost',
            'port' => 3306
        ],
        'logging' => [
            'elk' => [
                'host' => 'localhost',
            ],
            'file' => [
                'error' => 'error.log',
                'access' => 'access.log'
            ]
        ],
        'name' => 'Didatus'
    ];

    /**
     * @covers ::__call
     */
    public function testLevelOneParam()
    {
        $config = new Config($this->dummyConfig);
        $name = $config->getName();

        $this->assertEquals('Didatus', $name, "config value for key 'name' should be 'Didatus'");
    }

    public function testLevelTwoParam()
    {
        $config = new Config($this->dummyConfig);
        $name = $config->getDatabaseName();

        $this->assertEquals('test_database', $name, "config value for key 'database|name' should be 'test_database'");
    }

    public function testLevelThreeParam()
    {
        $config = new Config($this->dummyConfig);
        $host = $config->getLoggingElkHost();

        $this->assertEquals('localhost', $host, "config value for key 'logging|elk|host' should be 'localhost'");
    }

    public function testPartConfig()
    {
        $config = new Config($this->dummyConfig);
        $databaseConfig = $config->getDatabaseConfig();

        $this->assertInstanceOf(Config::class, $databaseConfig, 'config part should of instance Config');
        $this->assertEquals('localhost', $databaseConfig->getHost(), 'host of database config should be "localhost"');
    }

}
