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

        $this->converterTiposEscalares();
    }

    /**
     * No PHP 7.3 as propriedades não têm tipo. Reproduz a conversão automática do PHP 8
     * ('950.00' => 950.0 em ?float, '1' => 1 em ?int, 100 => '100' em ?string),
     * usando os tipos simples declarados em $__propertyTypes.
     *
     * @return void
     */
    private function converterTiposEscalares()
    {
        foreach (static::$__propertyTypes as $nome => $tipo) {
            $valor = $this->{$nome};

            if ($valor === null || !is_scalar($valor)) {
                continue;
            }

            switch (ltrim($tipo, '?')) {
                case 'int':
                case 'integer':
                    if (is_numeric($valor)) {
                        $this->{$nome} = (int) $valor;
                    }
                    break;
                case 'float':
                case 'double':
                    if (is_numeric($valor)) {
                        $this->{$nome} = (float) $valor;
                    }
                    break;
                case 'string':
                    $this->{$nome} = (string) $valor;
                    break;
                case 'bool':
                case 'boolean':
                    $this->{$nome} = (bool) $valor;
                    break;
            }
        }
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