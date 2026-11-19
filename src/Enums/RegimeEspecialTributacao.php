<?php

namespace Nfse\Enums;

/**
 * Regime Especial de Tributação
 *
 * Baseado no schema: TSRegEspTrib
 */
final class RegimeEspecialTributacao
{
    const Nenhum = '0';
    const AtoCooperado = '1';
    const Estimativa = '2';
    const MicroempresaMunicipal = '3';
    const NotarioOuRegistrador = '4';
    const ProfissionalAutonomo = '5';
    const SociedadeDeProfissionais = '6';
    const Outros = '9';

    private function __construct()
    {
    }

    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
            switch ($this) {
                case self::Nenhum:
                    return 'Nenhum';
                case self::AtoCooperado:
                    return 'Ato Cooperado (Cooperativa)';
                case self::Estimativa:
                    return 'Estimativa';
                case self::MicroempresaMunicipal:
                    return 'Microempresa Municipal';
                case self::NotarioOuRegistrador:
                    return 'Notário ou Registrador';
                case self::ProfissionalAutonomo:
                    return 'Profissional Autônomo';
                case self::SociedadeDeProfissionais:
                    return 'Sociedade de Profissionais';
                case self::Outros:
                    return 'Outros';
            }
        }));
    }

    /**
     * Get label (alias for getDescription)
     */
    public function label(): string
    {
        return $this->getDescription();
    }
}
