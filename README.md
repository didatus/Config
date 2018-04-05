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

#### Get a complex config value
```php
$config = new Config([
  'package' => [
    'name' => 'FooBar',
    'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'
  ]
]);
$config->getPackageName();
```

#### Get config object of sub part
```php
$config = new Config([
  'package' => [
    'name' => 'FooBar',
    'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'
  ]
]);
$packageConfig = $config->getPackageConfig();
$packageConfig->getName();
```

C8H5
