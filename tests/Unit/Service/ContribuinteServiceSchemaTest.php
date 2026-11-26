<?php

namespace Nfse\Tests\Unit\Service;

use Nfse\Dto\Http\EmissaoNfseResponse;
use Nfse\Dto\Nfse\DpsData;
use Nfse\Dto\Http\ConsultaDpsResponse;
use Nfse\Dto\Http\ConsultaEventoResponse;
use Nfse\Dto\Http\ConsultaNfseResponse;
use Nfse\Dto\Http\RegistroEventoResponse;
use Nfse\Enums\TipoAmbiente;
use Nfse\Http\Contracts\SefinNacionalInterface;
use Nfse\Http\NfseContext;
use Nfse\Service\ContribuinteService;
use Nfse\Signer\Certificate;
use Nfse\Signer\SignerInterface;
use Nfse\Support\IdGenerator;
use Nfse\Xml\SchemaDps;
use ReflectionClass;

class EmissorSchemaTeste extends ContribuinteService
{
    /** @var string */
    public $xml = '';

    protected function createSigner(Certificate $certificate): SignerInterface
    {
        return new AssinadorQueGuardaXml($this);
    }
}

class AssinadorQueGuardaXml implements SignerInterface
{
    /** @var EmissorSchemaTeste */
    private $emissor;

    public function __construct(EmissorSchemaTeste $emissor)
    {
        $this->emissor = $emissor;
    }

    public function sign(
        string $content,
        string $tagname,
        string $mark = 'Id',
        int $algorithm = OPENSSL_ALGO_SHA1,
        array $canonical = [true, false, null, null],
        string $rootname = '',
        array $options = []
    ): string {
        $this->emissor->xml = $content;

        return $content;
    }
}

function dpsEmitidaNoSchema(): DpsData
{
    return new DpsData([
        '@attributes' => ['versao' => '1.01'],
        'infDPS' => [
            '@attributes' => ['Id' => IdGenerator::generateDpsId('12345678000199', '3550308', '1', '1001')],
            'tpAmb' => 2,
            'dhEmi' => '2026-11-26T10:00:00-03:00',
            'verAplic' => '1.0',
            'serie' => '1',
            'nDPS' => '1001',
            'dCompet' => '2026-11-26',
            'tpEmit' => 1,
            'finNFSe' => '0',
            'cLocEmi' => '3550308',
            'prest' => ['CNPJ' => '12345678000199'],
            'toma' => ['xNome' => 'Tomador Exemplo'],
            'serv' => [
                'locPrest' => ['cLocPrestacao' => '3550308'],
                'cServ' => [
                    'cTribNac' => '010201',
                    'xDescServ' => 'Analise de sistemas',
                ],
            ],
            'valores' => [
                'vServPrest' => ['vServ' => 100.00],
            ],
            'IBSCBS' => [
                'cIndOp' => '100301',
                'indDest' => 0,
                'valores' => [
                    'trib' => [
                        'CST' => '000',
                        'cClassTrib' => '000001',
                    ],
                ],
            ],
        ],
    ]);
}

function xmlDaEmissao($ambiente, $schema = null): string
{
    $servico = new EmissorSchemaTeste(new NfseContext(
        $ambiente,
        dirname(__DIR__, 2).'/fixtures/certs/test.pfx',
        '1234'
    ));

    $resposta = '<?xml version="1.0" encoding="UTF-8"?>
<NFSe xmlns="http://www.sped.fazenda.gov.br/nfse" versao="1.00">
  <infNFSe Id="NFS123456" versao="1.00">
    <nNFSe>100</nNFSe>
    <DPS versao="1.00">
        <infDPS Id="DPS123">
            <tpAmb>2</tpAmb>
            <dhEmi>2026-11-26T10:00:00-03:00</dhEmi>
            <verAplic>1.0</verAplic>
            <serie>1</serie>
            <nDPS>1</nDPS>
            <dCompet>2026-11-26</dCompet>
            <tpEmit>1</tpEmit>
            <cLocEmi>3550308</cLocEmi>
        </infDPS>
    </DPS>
  </infNFSe>
</NFSe>';

    $sefin = new SefinQueDevolveXml(new EmissaoNfseResponse([
        'tpAmb' => 2,
        'verAplic' => '1.0',
        'dhProc' => '2026-11-26T10:00:00-03:00',
        'idDPS' => 'DPS123',
        'chAcesso' => 'CHAVE123',
        'nfseXmlGZipB64' => base64_encode(gzencode($resposta)),
    ]));

    $reflexao = new ReflectionClass(ContribuinteService::class);
    $sefinClient = $reflexao->getProperty('sefinClient');
    $sefinClient->setAccessible(true);
    $sefinClient->setValue($servico, $sefin);
    $adnClient = $reflexao->getProperty('adnClient');
    $adnClient->setAccessible(true);
    $adnClient->setValue($servico, new \stdClass());

    $servico->emitir(dpsEmitidaNoSchema(), $schema);

    return $servico->xml;
}

it('usa o schema do ambiente quando a versao nao e informada', function () {
    $homologacao = xmlDaEmissao(TipoAmbiente::Homologacao);
    $producao = xmlDaEmissao(TipoAmbiente::Producao);

    expect($homologacao)->toContain('</toma><indDest>0</indDest><serv>')
        ->and($homologacao)->not->toContain('<indDest>0</indDest><valores>')
        ->and($producao)->toContain('<IBSCBS><cIndOp>100301</cIndOp><indDest>0</indDest>')
        ->and($producao)->not->toContain('</toma><indDest>');
});

class SefinQueDevolveXml implements SefinNacionalInterface
{
    /** @var EmissaoNfseResponse */
    private $resposta;

    public function __construct(EmissaoNfseResponse $resposta)
    {
        $this->resposta = $resposta;
    }

    public function emitirNfse(string $dpsXmlGZipB64): EmissaoNfseResponse
    {
        return $this->resposta;
    }

    public function consultarNfse(string $chaveAcesso): ConsultaNfseResponse
    {
        throw new \BadMethodCallException('nao usado neste teste');
    }

    public function consultarDps(string $idDps): ConsultaDpsResponse
    {
        throw new \BadMethodCallException('nao usado neste teste');
    }

    public function registrarEvento(string $chaveAcesso, string $eventoXmlGZipB64): RegistroEventoResponse
    {
        throw new \BadMethodCallException('nao usado neste teste');
    }

    public function consultarEvento(string $chaveAcesso, int $tipoEvento, int $numSeqEvento): ConsultaEventoResponse
    {
        throw new \BadMethodCallException('nao usado neste teste');
    }

    public function verificarDps(string $idDps): bool
    {
        return false;
    }

    public function listarEventos(string $chaveAcesso): array
    {
        return [];
    }

    public function listarEventosPorTipo(string $chaveAcesso, int $tipoEvento): array
    {
        return [];
    }
}

it('prevalece a versao informada sobre o ambiente', function () {
    $xml = xmlDaEmissao(TipoAmbiente::Homologacao, SchemaDps::Producao);

    expect($xml)->toContain('<IBSCBS><cIndOp>100301</cIndOp><indDest>0</indDest>')
        ->and($xml)->not->toContain('</toma><indDest>');
});
