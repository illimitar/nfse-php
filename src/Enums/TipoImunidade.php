<?php

namespace Nfse\Enums;

/**
 * Tipo de Imunidade do ISSQN
 */
final class TipoImunidade
{
    const NaoInformado = 0;
    const PatrimonioRendaServicos = 1;
    const Templos = 2;
    const PartidosSindicatosInstituicoes = 3;
    const LivrosJornaisPeriodicos = 4;
    const FonogramasVideofonogramas = 5;

    private function __construct()
    {
    }

    /**
     * Imunidade (tipo não informado na nota de origem)
     */
    /**
     * Patrimônio, renda ou serviços, uns dos outros (CF88, Art 150, VI, a)
     */
    /**
     * Templos de qualquer culto (CF88, Art 150, VI, b)
     */
    /**
     * Partidos políticos, sindicatos, instituições de educação e assistência social (CF88, Art 150, VI, c)
     */
    /**
     * Livros, jornais, periódicos e o papel destinado a sua impressão (CF88, Art 150, VI, d)
     */
    /**
     * Fonogramas e videofonogramas musicais (CF88, Art 150, VI, e)
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::NaoInformado:
        return 'Imunidade (tipo não informado na nota de origem)';
    case self::PatrimonioRendaServicos:
        return 'Patrimônio, renda ou serviços, uns dos outros (CF88, Art 150, VI, a)';
    case self::Templos:
        return 'Templos de qualquer culto (CF88, Art 150, VI, b)';
    case self::PartidosSindicatosInstituicoes:
        return 'Patrimônio, renda ou serviços dos partidos políticos, inclusive suas fundações, das entidades sindicais dos trabalhadores, das instituições de educação e de assistência social, sem fins lucrativos, atendidos os requisitos da lei (CF88, Art 150, VI, c)';
    case self::LivrosJornaisPeriodicos:
        return 'Livros, jornais, periódicos e o papel destinado a sua impressão (CF88, Art 150, VI, d)';
    case self::FonogramasVideofonogramas:
        return 'Fonogramas e videofonogramas musicais produzidos no Brasil (CF88, Art 150, VI, e)';
    }
}));
    }

    public function label(): string
    {
        return $this->getDescription();
    }
}
