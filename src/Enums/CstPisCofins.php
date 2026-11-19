<?php

namespace Nfse\Enums;

/**
 * Código da Situação Tributária do PIS/COFINS
 *
 * Baseado no schema: TSCST
 */
final class CstPisCofins
{
    const Nenhum = '00';
    const OperacaoTributavelAliquotaBasica = '01';
    const OperacaoTributavelAliquotaDiferenciada = '02';
    const OperacaoTributavelAliquotaPorUnidade = '03';
    const OperacaoTributavelMonofasicaAliquotaZero = '04';
    const OperacaoTributavelSubstituicaoTributaria = '05';
    const OperacaoTributavelAliquotaZero = '06';
    const OperacaoIsenta = '07';
    const OperacaoSemIncidencia = '08';
    const OperacaoComSuspensao = '09';
    const OutrasOperacoesSaida = '49';
    const CreditoReceitaTributadaMercadoInterno = '50';
    const CreditoReceitaNaoTributadaMercadoInterno = '51';
    const CreditoReceitaExportacao = '52';
    const CreditoReceitasTributadasENaoTributadasMercadoInterno = '53';
    const CreditoReceitasTributadasMercadoInternoEExportacao = '54';
    const CreditoReceitasNaoTributadasMercadoInternoEExportacao = '55';
    const CreditoReceitasTributadasNaoTributadasEExportacao = '56';
    const CreditoPresumidoReceitaTributadaMercadoInterno = '60';
    const CreditoPresumidoReceitaNaoTributadaMercadoInterno = '61';
    const CreditoPresumidoReceitaExportacao = '62';
    const CreditoPresumidoReceitasTributadasENaoTributadasMercadoInterno = '63';
    const CreditoPresumidoReceitasTributadasMercadoInternoEExportacao = '64';
    const CreditoPresumidoReceitasNaoTributadasMercadoInternoEExportacao = '65';
    const CreditoPresumidoReceitasTributadasNaoTributadasEExportacao = '66';
    const CreditoPresumidoOutrasOperacoes = '67';
    const AquisicaoSemDireitoCredito = '70';
    const AquisicaoComIsencao = '71';
    const AquisicaoComAliquotaZero = '72';
    const AquisicaoComSuspensao = '73';
    const AquisicaoSemIncidencia = '74';
    const AquisicaoSubstituicaoTributaria = '75';
    const OutrasOperacoesEntrada = '98';
    const OutrasOperacoes = '99';

    private function __construct()
    {
    }

    /**
     * Nenhum
     */
    /**
     * Operação Tributável com Alíquota Básica
     */
    /**
     * Operação Tributável com Alíquota Diferenciada
     */
    /**
     * Operação Tributável com Alíquota por Unidade de Medida de Produto
     */
    /**
     * Operação Tributável Monofásica - Revenda a Alíquota Zero
     */
    /**
     * Operação Tributável por Substituição Tributária
     */
    /**
     * Operação Tributável a Alíquota Zero
     */
    /**
     * Operação Isenta da Contribuição
     */
    /**
     * Operação sem Incidência da Contribuição
     */
    /**
     * Operação com Suspensão da Contribuição
     */
    /**
     * Outras Operações de Saída
     */
    /**
     * Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Tributada no Mercado Interno
     */
    /**
     * Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno
     */
    /**
     * Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de Exportação
     */
    /**
     * Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno
     */
    /**
     * Operação com Direito a Crédito - Vinculada a Receitas Tributadas no Mercado Interno e de Exportação
     */
    /**
     * Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação
     */
    /**
     * Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação
     */
    /**
     * Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Tributada no Mercado Interno
     */
    /**
     * Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno
     */
    /**
     * Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita de Exportação
     */
    /**
     * Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno
     */
    /**
     * Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas no Mercado Interno e de Exportação
     */
    /**
     * Crédito Presumido - Operação de Aquisição Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação
     */
    /**
     * Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação
     */
    /**
     * Crédito Presumido - Outras Operações
     */
    /**
     * Operação de Aquisição sem Direito a Crédito
     */
    /**
     * Operação de Aquisição com Isenção
     */
    /**
     * Operação de Aquisição com Alíquota Zero
     */
    /**
     * Operação de Aquisição com Suspensão
     */
    /**
     * Operação de Aquisição sem Incidência
     */
    /**
     * Operação de Aquisição por Substituição Tributária
     */
    /**
     * Outras Operações de Entrada
     */
    /**
     * Outras Operações
     */
    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::Nenhum:
        return 'Nenhum';
    case self::OperacaoTributavelAliquotaBasica:
        return 'Operação Tributável com Alíquota Básica';
    case self::OperacaoTributavelAliquotaDiferenciada:
        return 'Operação Tributável com Alíquota Diferenciada';
    case self::OperacaoTributavelAliquotaPorUnidade:
        return 'Operação Tributável com Alíquota por Unidade de Medida de Produto';
    case self::OperacaoTributavelMonofasicaAliquotaZero:
        return 'Operação Tributável Monofásica - Revenda a Alíquota Zero';
    case self::OperacaoTributavelSubstituicaoTributaria:
        return 'Operação Tributável por Substituição Tributária';
    case self::OperacaoTributavelAliquotaZero:
        return 'Operação Tributável a Alíquota Zero';
    case self::OperacaoIsenta:
        return 'Operação Isenta da Contribuição';
    case self::OperacaoSemIncidencia:
        return 'Operação sem Incidência da Contribuição';
    case self::OperacaoComSuspensao:
        return 'Operação com Suspensão da Contribuição';
    case self::OutrasOperacoesSaida:
        return 'Outras Operações de Saída';
    case self::CreditoReceitaTributadaMercadoInterno:
        return 'Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Tributada no Mercado Interno';
    case self::CreditoReceitaNaoTributadaMercadoInterno:
        return 'Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno';
    case self::CreditoReceitaExportacao:
        return 'Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de Exportação';
    case self::CreditoReceitasTributadasENaoTributadasMercadoInterno:
        return 'Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno';
    case self::CreditoReceitasTributadasMercadoInternoEExportacao:
        return 'Operação com Direito a Crédito - Vinculada a Receitas Tributadas no Mercado Interno e de Exportação';
    case self::CreditoReceitasNaoTributadasMercadoInternoEExportacao:
        return 'Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação';
    case self::CreditoReceitasTributadasNaoTributadasEExportacao:
        return 'Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação';
    case self::CreditoPresumidoReceitaTributadaMercadoInterno:
        return 'Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Tributada no Mercado Interno';
    case self::CreditoPresumidoReceitaNaoTributadaMercadoInterno:
        return 'Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno';
    case self::CreditoPresumidoReceitaExportacao:
        return 'Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita de Exportação';
    case self::CreditoPresumidoReceitasTributadasENaoTributadasMercadoInterno:
        return 'Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno';
    case self::CreditoPresumidoReceitasTributadasMercadoInternoEExportacao:
        return 'Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas no Mercado Interno e de Exportação';
    case self::CreditoPresumidoReceitasNaoTributadasMercadoInternoEExportacao:
        return 'Crédito Presumido - Operação de Aquisição Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação';
    case self::CreditoPresumidoReceitasTributadasNaoTributadasEExportacao:
        return 'Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação';
    case self::CreditoPresumidoOutrasOperacoes:
        return 'Crédito Presumido - Outras Operações';
    case self::AquisicaoSemDireitoCredito:
        return 'Operação de Aquisição sem Direito a Crédito';
    case self::AquisicaoComIsencao:
        return 'Operação de Aquisição com Isenção';
    case self::AquisicaoComAliquotaZero:
        return 'Operação de Aquisição com Alíquota Zero';
    case self::AquisicaoComSuspensao:
        return 'Operação de Aquisição com Suspensão';
    case self::AquisicaoSemIncidencia:
        return 'Operação de Aquisição sem Incidência';
    case self::AquisicaoSubstituicaoTributaria:
        return 'Operação de Aquisição por Substituição Tributária';
    case self::OutrasOperacoesEntrada:
        return 'Outras Operações de Entrada';
    case self::OutrasOperacoes:
        return 'Outras Operações';
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
