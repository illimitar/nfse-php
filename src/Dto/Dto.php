<?php

namespace Nfse\Dto;

use ReflectionClass;
use ReflectionProperty;
use Spatie\DataTransferObject\DataTransferObject;

abstract class Dto extends DataTransferObject
{
    public function __construct(...$args)
    {
        if (isset($args[0]) && is_array($args[0])) {
            $input = $args[0];
        } else {
            $input = $args;
        }

        $input = $this->normalizeInput($input);

        parent::__construct($input);
    }

    /**
     * @param array $input
     * @return array
     */
    protected function normalizeInput(array $input)
    {
        $class = new ReflectionClass($this);
        $map = array();

        if ($class->hasProperty('__mapFrom')) {
            $prop = $class->getProperty('__mapFrom');
            $prop->setAccessible(true);
            // static property
            $map = $class->getStaticPropertyValue('__mapFrom');
            if (!is_array($map)) {
                $map = array();
            }
        }

        foreach ($class->getProperties(ReflectionProperty::IS_PUBLIC) as $property) {
            if ($property->isStatic()) {
                continue;
            }
            $propName = $property->getName();

            if (array_key_exists($propName, $input)) {
                $mappedName = isset($map[$propName]) ? $map[$propName] : null;

                if ($mappedName) {
                    if (str_contains($mappedName, '.')) {
                        if (!$this->hasDotNotation($input, $mappedName)) {
                            $this->setDotNotation($input, $mappedName, $input[$propName]);
                        }
                    } else {
                        if (!array_key_exists($mappedName, $input)) {
                            $input[$mappedName] = $input[$propName];
                        }
                    }
                }
            }
        }

        return $input;
    }

    /**
     * @param array $array
     * @param string $key
     * @return bool
     */
    protected function hasDotNotation(array $array, $key)
    {
        $keys = explode('.', $key);
        $current = $array;

        foreach ($keys as $k) {
            if (!is_array($current) || !array_key_exists($k, $current)) {
                return false;
            }
            $current = $current[$k];
        }

        return true;
    }

    /**
     * @param array $array
     * @param string $key
     * @param mixed $value
     * @return void
     */
    protected function setDotNotation(array &$array, $key, $value)
    {
        $keys = explode('.', $key);
        $current = &$array;

        foreach ($keys as $i => $k) {
            if ($i === count($keys) - 1) {
                $current[$k] = $value;
            } else {
                if (!isset($current[$k]) || !is_array($current[$k])) {
                    $current[$k] = array();
                }
                $current = &$current[$k];
            }
        }
    }
}