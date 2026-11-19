<?php

namespace Nfse\Support\DTO;

use Spatie\DataTransferObject\Caster;

class ArrayCaster implements Caster
{
    /** @phpstan-ignore constructor.unusedParameter */
    private $itemType;

    public function __construct(array $types, string $itemType) {
        $this->itemType = $itemType;}

    public function cast($value)
    {
        if (! is_array($value)) {
            return $value;
        }

        // Grupos com ocorrência única chegam do XML como array associativo
        if (! array_is_list($value)) {
            $value = [$value];
        }

        return array_map(
            function ($data) {
                if (is_array($data)) {
                    return new $this->itemType($data);
                }

                return $data;
            },
            $value
        );
    }
}
