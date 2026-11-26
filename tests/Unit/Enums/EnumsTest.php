<?php

namespace Nfse\Tests\Unit\Enums;

use Nfse\Enums\CodigoStatus;
use Nfse\Enums\EmitenteDPS;
use Nfse\Enums\IndicadorTotalTributos;
use Nfse\Enums\MovimentacaoTemporariaBens;
use Nfse\Enums\ProcessoEmissao;
use Nfse\Enums\RegimeEspecialTributacao;
use Nfse\Enums\TipoAjusteBaseCalculo;
use Nfse\Enums\TipoAmbiente;
use Nfse\Enums\TipoCobrancaCondominio;
use Nfse\Enums\TipoDescontoCondominio;
use Nfse\Enums\TipoDetalhamentoCobrancaCondominio;
use Nfse\Enums\TipoImunidade;
use Nfse\Enums\TipoNsu;
use Nfse\Enums\TipoRetencaoIssqn;
use Nfse\Enums\TipoRetencaoPisCofins;
use Nfse\Enums\TipoSuspensao;
use Nfse\Enums\TributacaoIssqn;

// Os enums foram convertidos para classes com constantes (PHP 7.3): só os valores são verificados.

it('TipoAmbiente has correct values', function () {
    expect(TipoAmbiente::Producao)->toBe('1')
        ->and(TipoAmbiente::Homologacao)->toBe('2')
        ->and((new \ReflectionClass(TipoAmbiente::class))->getConstants())->toHaveCount(2);
});

it('EmitenteDPS has correct values', function () {
    expect(EmitenteDPS::Prestador)->toBe('1')
        ->and(EmitenteDPS::Tomador)->toBe('2')
        ->and(EmitenteDPS::Intermediario)->toBe('3')
        ->and((new \ReflectionClass(EmitenteDPS::class))->getConstants())->toHaveCount(3);
});

it('ProcessoEmissao has correct values', function () {
    expect(ProcessoEmissao::WebService)->toBe('1')
        ->and(ProcessoEmissao::WebFisco)->toBe('2')
        ->and(ProcessoEmissao::AppFisco)->toBe('3')
        ->and((new \ReflectionClass(ProcessoEmissao::class))->getConstants())->toHaveCount(3);
});

it('TipoNsu has correct values', function () {
    expect(TipoNsu::Recepcao)->toBe('RECEPCAO')
        ->and(TipoNsu::Distribuicao)->toBe('DISTRIBUICAO')
        ->and(TipoNsu::Geral)->toBe('GERAL')
        ->and(TipoNsu::Mei)->toBe('MEI');
});

it('TributacaoIssqn has correct values', function () {
    expect(TributacaoIssqn::OperacaoTributavel)->toBe(1)
        ->and(TributacaoIssqn::Imunidade)->toBe(2);
});

it('TipoRetencaoIssqn has correct values', function () {
    expect(TipoRetencaoIssqn::NaoRetido)->toBe(1)
        ->and(TipoRetencaoIssqn::RetidoTomador)->toBe(2);
});

it('TipoImunidade has correct values', function () {
    expect(TipoImunidade::NaoInformado)->toBe(0)
        ->and(TipoImunidade::PatrimonioRendaServicos)->toBe(1);
});

it('TipoSuspensao has correct values', function () {
    expect(TipoSuspensao::DecisaoJudicial)->toBe(1)
        ->and(TipoSuspensao::DecisaoAdministrativa)->toBe(2);
});

it('TipoRetencaoPisCofins has correct values', function () {
    expect(TipoRetencaoPisCofins::PisCofinsNaoRetido)->toBe(2)
        ->and(TipoRetencaoPisCofins::PisCofinsRetido)->toBe(1)
        ->and(TipoRetencaoPisCofins::NaoRetidos)->toBe(0);
});

it('IndicadorTotalTributos has correct values', function () {
    expect(IndicadorTotalTributos::Nenhum)->toBe(0)
        ->and(IndicadorTotalTributos::Lei12741)->toBe(1);
});

it('MovimentacaoTemporariaBens has correct values', function () {
    expect(MovimentacaoTemporariaBens::Desconhecido)->toBe('0')
        ->and(MovimentacaoTemporariaBens::Nao)->toBe('1')
        ->and(MovimentacaoTemporariaBens::DeclaracaoImportacao)->toBe('2')
        ->and(MovimentacaoTemporariaBens::DeclaracaoExportacao)->toBe('3')
        ->and((new \ReflectionClass(MovimentacaoTemporariaBens::class))->getConstants())->toHaveCount(4);
});

it('TipoAjusteBaseCalculo has the values of TSRTCTpAjusteBC', function () {
    expect((new \ReflectionClass(TipoAjusteBaseCalculo::class))->getConstants())->toHaveCount(13)
        ->and(TipoAjusteBaseCalculo::Materiais)->toBe('2')
        ->and(TipoAjusteBaseCalculo::RepasseConsorciado)->toBe('5')
        ->and(TipoAjusteBaseCalculo::OutrasDeducoes)->toBe('99')
        ->and(TipoAjusteBaseCalculo::RepasseIntermediacaoImoveis)->toBe('101')
        ->and(TipoAjusteBaseCalculo::OutrosReembolsos)->toBe('199');
});

it('CodigoStatus has only the values of TStat from schema 1.01', function () {
    $constantes = (new \ReflectionClass(CodigoStatus::class))->getConstants();

    expect($constantes)->toHaveCount(4)
        ->and(CodigoStatus::NfseGerada)->toBe(100)
        ->and(CodigoStatus::NfseDecisaoJudicial)->toBe(102)
        ->and(CodigoStatus::NfseAvulsa)->toBe(103)
        ->and(CodigoStatus::NfseMei)->toBe(107)
        ->and(in_array(101, $constantes, true))->toBeFalse();
});

it('RegimeEspecialTributacao has only the values of TSRegEspTrib from schema 1.01', function () {
    $constantes = (new \ReflectionClass(RegimeEspecialTributacao::class))->getConstants();

    expect($constantes)->toHaveCount(8)
        ->and(RegimeEspecialTributacao::Nenhum)->toBe('0')
        ->and(RegimeEspecialTributacao::AtoCooperado)->toBe('1')
        ->and(RegimeEspecialTributacao::Estimativa)->toBe('2')
        ->and(RegimeEspecialTributacao::MicroempresaMunicipal)->toBe('3')
        ->and(RegimeEspecialTributacao::NotarioOuRegistrador)->toBe('4')
        ->and(RegimeEspecialTributacao::ProfissionalAutonomo)->toBe('5')
        ->and(RegimeEspecialTributacao::SociedadeDeProfissionais)->toBe('6')
        ->and(RegimeEspecialTributacao::Outros)->toBe('9')
        ->and(in_array('7', $constantes, true))->toBeFalse()
        ->and(in_array('8', $constantes, true))->toBeFalse()
        ->and(in_array('10', $constantes, true))->toBeFalse();
});

it('TipoCobrancaCondominio has the values of TSRTCTpCobranca', function () {
    expect(TipoCobrancaCondominio::CondominioOrdinario)->toBe('01')
        ->and(TipoCobrancaCondominio::OutraCobranca)->toBe('99')
        ->and((new \ReflectionClass(TipoCobrancaCondominio::class))->getConstants())->toHaveCount(6);
});

it('TipoDescontoCondominio has the values of TSRTCTpDesconto', function () {
    expect(TipoDescontoCondominio::DescontoIncondicionado)->toBe('1')
        ->and(TipoDescontoCondominio::DescontoCondicionado)->toBe('2')
        ->and((new \ReflectionClass(TipoDescontoCondominio::class))->getConstants())->toHaveCount(2);
});

it('TipoDetalhamentoCobrancaCondominio has the values of TSRTCTpDetCobranca', function () {
    expect(TipoDetalhamentoCobrancaCondominio::CondominioComumCrd)->toBe('001')
        ->and(TipoDetalhamentoCobrancaCondominio::CondominioIrrecuperavel)->toBe('036')
        ->and(TipoDetalhamentoCobrancaCondominio::Outro)->toBe('999')
        ->and((new \ReflectionClass(TipoDetalhamentoCobrancaCondominio::class))->getConstants())->toHaveCount(37);
});
