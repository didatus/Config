<?php

namespace Didatus\Config;

/**
 * Class Config
 * @package Didatus\Config
 */
class Config
{
    private $data;

    public function __construct(array $config)
    {
        $this->data = $config;
    }

    public function __call($name, $arguments)
    {
        $parts = preg_split('/(?=[A-Z])/', $name);

        $action = array_shift($parts);
        if (strtolower($action) !== 'get') {
            throw new \BadMethodCallException('calls must start with get');
        }

        $config = false;
        if (strtolower($parts[count($parts) - 1]) == 'config') {
            $config = true;
            array_pop($parts);
        }

        $temp = $this->data;
        foreach ($parts as $part) {
            $part = strtolower($part);

            if (!array_key_exists($part, $temp)) {
                throw new \BadMethodCallException('the key "' . $part . '" does not exist in config');
            }

            $temp = $temp[$part];
        }

        if ($config) {
            return new self($temp);
        }

        return $temp;
    }
}
