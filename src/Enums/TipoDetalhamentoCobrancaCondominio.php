<?php

namespace Nfse\Enums;

/**
 * Tipo de detalhamento da cobrança condominial.
 *
 * Baseado no schema: TSRTCTpDetCobranca
 */
final class TipoDetalhamentoCobrancaCondominio
{
    const CondominioComumCrd = '001';
    const CondominioComumMetroQuadrado = '002';
    const CondominioComumFixo = '003';
    const CondominioComumFracao = '004';
    const CondominioComumPercentual = '005';
    const CondominioCmm = '006';
    const EnergiaEletrica = '007';
    const Agua = '008';
    const ArCondicionado = '009';
    const Telefone = '010';
    const Internet = '011';
    const ControlePragas = '012';
    const Exaustao = '013';
    const Gas = '014';
    const Iptu = '015';
    const TaxaArea = '016';
    const Manutencao = '017';
    const Multa = '018';
    const Seguro = '019';
    const TaxaBombeiro = '020';
    const TaxaAdministracao = '021';
    const TaxaForo = '022';
    const Limpeza = '023';
    const TaxaLixo = '024';
    const Tapume = '025';
    const InstalacaoAlarme = '026';
    const Seguranca = '027';
    const FundoPromocaoPropaganda = '028';
    const AnaliseProjeto = '029';
    const FundoReserva = '030';
    const LaudosVistorias = '031';
    const DeteccaoFumaca = '032';
    const ReanaliseProjeto = '033';
    const TaxaExtra = '034';
    const AreaVaga = '035';
    const CondominioIrrecuperavel = '036';
    const Outro = '999';

    private function __construct()
    {
    }

    public function getDescription(): string
    {
        switch ($this) {
            case self::CondominioComumCrd:
                return 'Cond. Comum CRD';
            case self::CondominioComumMetroQuadrado:
                return 'Cond. Comum M2';
            case self::CondominioComumFixo:
                return 'Cond. Comum Fixo';
            case self::CondominioComumFracao:
                return 'Cond. Comum Fração';
            case self::CondominioComumPercentual:
                return 'Cond. Comum Percentual';
            case self::CondominioCmm:
                return 'Condomínio CMM';
            case self::EnergiaEletrica:
                return 'Energia Elétrica';
            case self::Agua:
                return 'Água';
            case self::ArCondicionado:
                return 'Ar Condicionado';
            case self::Telefone:
                return 'Telefone';
            case self::Internet:
                return 'Internet';
            case self::ControlePragas:
                return 'Controle de Pragas';
            case self::Exaustao:
                return 'Exaustão';
            case self::Gas:
                return 'Gás';
            case self::Iptu:
                return 'IPTU';
            case self::TaxaArea:
                return 'Taxa Área';
            case self::Manutencao:
                return 'Manutenção';
            case self::Multa:
                return 'Multa';
            case self::Seguro:
                return 'Seguro';
            case self::TaxaBombeiro:
                return 'Taxa Bombeiro';
            case self::TaxaAdministracao:
                return 'Taxa Administração';
            case self::TaxaForo:
                return 'Taxa Foro';
            case self::Limpeza:
                return 'Limpeza';
            case self::TaxaLixo:
                return 'Taxa de Lixo';
            case self::Tapume:
                return 'Tapume';
            case self::InstalacaoAlarme:
                return 'Instalação Alarme';
            case self::Seguranca:
                return 'Segurança';
            case self::FundoPromocaoPropaganda:
                return 'Fundo de Promoção e Propaganda';
            case self::AnaliseProjeto:
                return 'Análise de Projeto';
            case self::FundoReserva:
                return 'Fundo de Reserva';
            case self::LaudosVistorias:
                return 'Laudos e Vistorias';
            case self::DeteccaoFumaca:
                return 'Detecção de Fumaça';
            case self::ReanaliseProjeto:
                return 'Reanálise de Projeto';
            case self::TaxaExtra:
                return 'Taxa Extra';
            case self::AreaVaga:
                return 'Área Vaga';
            case self::CondominioIrrecuperavel:
                return 'Condomínio Irrecuperável';
            case self::Outro:
                return 'Outro';
        }
    }

    public function label(): string
    {
        return $this->getDescription();
    }
}
