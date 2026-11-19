<?php

namespace Nfse\Enums;

/**
 * Tipo de Suspensão da Exigibilidade do ISSQN
 */
final class TipoSuspensao
{
    const DecisaoJudicial = 1;
    const DecisaoAdministrativa = 2;

    private function __construct()
    {
    }

    /**
     * Suspenso por decisão judicial
     */
    /**
     * Suspenso por decisão administrativa
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::DecisaoJudicial:
        return 'Suspenso por decisão judicial';
    case self::DecisaoAdministrativa:
        return 'Suspenso por decisão administrativa';
    }
}));
    }

    public function label(): string
    {
        return $this->getDescription();
    }
}
