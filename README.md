# Config
A simple config class.

[![Latest Stable Version](https://poser.pugx.org/didatus/config/v/stable)](https://packagist.org/packages/didatus/config)
[![License](https://poser.pugx.org/didatus/random-string/license)](https://packagist.org/packages/didatus/config)
[![Build Status](https://travis-ci.org/didatus/RandomString.svg?branch=master)](https://travis-ci.org/didatus/Config)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/didatus/Config/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/didatus/Config/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/didatus/Config/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/didatus/Config/?branch=master)


#### Create a simple config instance
```php
use Didatus\Config\Config;
$config = new Config(['foo' => 'bar']);
```

#### Get a simple config value
```php
$config = new Config(['foo' => 'bar']);
$config->getFoo();
```


C8H5
