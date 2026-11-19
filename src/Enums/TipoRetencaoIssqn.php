<?php

namespace Nfse\Enums;

/**
 * Tipo de Retenção do ISSQN
 */
final class TipoRetencaoIssqn
{
    const NaoRetido = 1;
    const RetidoTomador = 2;
    const RetidoIntermediario = 3;

    private function __construct()
    {
    }

    /**
     * Não Retido
     */
    /**
     * Retido pelo Tomador
     */
    /**
     * Retido pelo Intermediário
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::NaoRetido:
        return 'Não Retido';
    case self::RetidoTomador:
        return 'Retido pelo Tomador';
    case self::RetidoIntermediario:
        return 'Retido pelo Intermediário';
    }
}));
    }

    public function label(): string
    {
        return $this->getDescription();
    }
}
