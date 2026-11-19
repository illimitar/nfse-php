<?php

namespace Nfse\Validator;

class ValidationResult
{
    public $isValid;
    public $errors;

    public function __construct(bool $isValid, array $errors = []) {
        $this->isValid = $isValid;
        $this->errors = $errors;}

    public static function success(): self
    {
        return new self(true);
    }

    public static function failure(array $errors): self
    {
        return new self(false, $errors);
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
