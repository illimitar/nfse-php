<?php

namespace Nfse\Enums;

/**
 * Código indicador da operação de fornecimento (cIndOp).
 *
 * Baseado no schema: TSRTCCodIndOp e na aba CÓDIGO_INDICADOR_OPERAÇÃO do Anexo I (20/10/2026).
 */
final class CodigoIndicadorOperacao
{
    const Ind010101 = '010101';
    const Ind010102 = '010102';
    const Ind010103 = '010103';
    const Ind010106 = '010106';
    const Ind020101 = '020101';

    /** Válido a partir de 01/12/2026. Operação com bem imóvel relacionada a BICE. */
    const Ind020102 = '020102';

    const Ind020201 = '020201';
    const Ind020202 = '020202';
    const Ind020301 = '020301';
    const Ind020401 = '020401';
    const Ind030101 = '030101';
    const Ind030102 = '030102';
    const Ind030103 = '030103';
    const Ind030104 = '030104';
    const Ind040101 = '040101';
    const Ind050101 = '050101';
    const Ind050102 = '050102';
    const Ind050103 = '050103';
    const Ind050104 = '050104';
    const Ind050201 = '050201';
    const Ind060101 = '060101';
    const Ind070101 = '070101';
    const Ind070102 = '070102';
    const Ind080101 = '080101';
    const Ind100101 = '100101';
    const Ind100102 = '100102';
    const Ind100201 = '100201';
    const Ind100301 = '100301';
    const Ind100302 = '100302';
    const Ind100401 = '100401';
    const Ind100501 = '100501';
    const Ind100502 = '100502';
    const Ind100601 = '100601';

    /** Válido a partir de 01/12/2026. Transporte dutoviário de gás natural, capacidade de entrada. */
    const Ind130101 = '130101';

    /** Válido a partir de 01/12/2026. Transporte dutoviário de gás natural, capacidade de saída. */
    const Ind130201 = '130201';

    private function __construct()
    {
    }

    /**
     * @param mixed $valor
     * @return string|null
     */
    public static function tryFrom($valor)
    {
        if ($valor === null || $valor === '') {
            return null;
        }

        $constantes = (new \ReflectionClass(self::class))->getConstants();
        foreach ($constantes as $constante) {
            if ((string) $constante === (string) $valor) {
                return $constante;
            }
        }

        return null;
    }

    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        switch ($this) {
            case self::Ind010101:
                return 'Bem Móvel Material';
            case self::Ind010102:
                return 'Bem Móvel Material';
            case self::Ind010103:
                return 'Bem Móvel Material';
            case self::Ind010106:
                return 'Bem Móvel Material';
            case self::Ind020101:
                return 'Operação com bem imóvel, bem imaterial, inclusive direito, relacionada a bem imóvel';
            case self::Ind020102:
                return 'Operação com bem imóvel, bem móvel imaterial, inclusive direito, relacionada a Bem Imóvel de Características Especiais (BICE)';
            case self::Ind020201:
                return 'Serviço prestado fisicamente sobre bem imóvel';
            case self::Ind020202:
                return 'Serviço prestado fisicamente sobre bem imóvel';
            case self::Ind020301:
                return 'Serviço de administração e intermediação de bem imóvel';
            case self::Ind020401:
                return 'Serviços de locação, sublocação, arrendamento, direito de passagem ou permissão de uso, compartilhado ou não, de ferrovia, rodovia, postes, cabos, dutos e condutos de qualquer natureza';
            case self::Ind030101:
                return 'Serviço prestado fisicamente sobre a pessoa ou fruído presencialmente por pessoa física';
            case self::Ind030102:
                return 'Serviço prestado fisicamente sobre a pessoa ou fruído presencialmente por pessoa física';
            case self::Ind030103:
                return 'Serviço prestado fisicamente sobre a pessoa ou fruído presencialmente por pessoa física';
            case self::Ind030104:
                return 'Serviço prestado fisicamente sobre a pessoa ou fruído presencialmente por pessoa física';
            case self::Ind040101:
                return 'Serviço de planejamento, organização e administração de feiras, exposições, congressos, espetáculos, exibições e congêneres';
            case self::Ind050101:
                return 'Serviço prestado fisicamente sobre bem móvel material';
            case self::Ind050102:
                return 'Serviço prestado fisicamente sobre bem móvel material';
            case self::Ind050103:
                return 'Serviço prestado fisicamente sobre bem móvel material';
            case self::Ind050104:
                return 'Serviço prestado fisicamente sobre bem móvel material';
            case self::Ind050201:
                return 'Serviços portuários';
            case self::Ind060101:
                return 'Serviço de transporte de passageiros';
            case self::Ind070101:
                return 'Serviço de transporte de carga';
            case self::Ind070102:
                return 'Serviço de transporte de carga';
            case self::Ind080101:
                return 'Execução de serviços de exploração de via';
            case self::Ind100101:
                return 'Cessão de espaço para prestação de serviços publicitários, em operações onerosas';
            case self::Ind100102:
                return 'Cessão de espaço para prestação de serviços publicitários, em operações onerosas';
            case self::Ind100201:
                return 'Demais serviços, em operações não onerosas';
            case self::Ind100301:
                return 'Demais bens, em operações onerosas';
            case self::Ind100302:
                return 'Demais bens, em operações onerosas';
            case self::Ind100401:
                return 'Demais bens, em operações não onerosas';
            case self::Ind100501:
                return 'Demais bens, em operações onerosas';
            case self::Ind100502:
                return 'Demais bens, em operações onerosas';
            case self::Ind100601:
                return 'Demais bens, em operações não onerosas';
            case self::Ind130101:
                return 'Operações de transporte dutoviário de gás natural, na contratação de capacidade de entrada';
            case self::Ind130201:
                return 'Operações de transporte dutoviário de gás natural, na contratação de capacidade de saída';
        }
    }

    /**
     * Get label (alias for getDescription)
     */
    public function label(): string
    {
        return $this->getDescription();
    }
}
