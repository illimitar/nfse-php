<?php

namespace Nfse\Support\DTO;

use ReflectionClass;
use Spatie\DataTransferObject\Caster;

/**
 * Compatível com enums convertidos em classes com constantes (ConverteVersao).
 */
class EnumCaster implements Caster
{
    /** @var array */
    private $types;

    /** @var string */
    private $enumType;

    /**
     * @param array $types
     * @param string $enumType
     */
    public function __construct(array $types, $enumType)
    {
        $this->types = $types;
        $this->enumType = $enumType;
    }

    /**
     * @param mixed $value
     * @return mixed
     */
    public function cast($value)
    {
        if ($value instanceof $this->enumType) {
            return $value;
        }

        if ($value === null) {
            return null;
        }

        if (!class_exists($this->enumType)) {
            return $value;
        }

        // Enum nativo PHP 8.1+
        if (function_exists('enum_exists') && enum_exists($this->enumType)) {
            if (is_string($value) && is_numeric($value)) {
                $ref = new \ReflectionEnum($this->enumType);
                $backing = $ref->getBackingType();
                if ($ref->isBacked() && $backing && $backing->getName() === 'int') {
                    $value = (int) $value;
                }
            }
            return $this->enumType::tryFrom($value);
        }

        // Classe gerada pelo ConverteVersao (constantes)
        $constants = (new ReflectionClass($this->enumType))->getConstants();
        foreach ($constants as $constValue) {
            if ($constValue === $value || (string) $constValue === (string) $value) {
                return $constValue;
            }
        }

        return $value;
    }
}