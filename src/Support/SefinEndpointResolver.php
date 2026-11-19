<?php

namespace Nfse\Support;

use Nfse\Dto\Http\Endpoint;
use Nfse\Enums\TipoAmbiente;
use Nfse\Http\Contracts\EndpointResolver;
use Nfse\Http\NfseContext;

class SefinEndpointResolver implements EndpointResolver
{
    private const DEFAULT = [
        'production' => 'https://sefin.nfse.gov.br/SefinNacional',
        'homologation' => 'https://sefin.producaorestrita.nfse.gov.br/SefinNacional',
    ];

    /**
     * Municípios com emissor próprio no leiaute nacional, por código IBGE.
     *
     * @var array
     */
    private static $endpoints = array();

    /**
     * Hosts municipais que antes eram acessados pelo IP.
     *
     * @var array
     */
    private static $pinnedHosts = array();

    /**
     * Entradas no formato do CURLOPT_RESOLVE ("host:porta:ip").
     *
     * @return array
     */
    public static function pinnedHosts(): array
    {
        $entries = array();
        foreach (self::$pinnedHosts as $hostPort => $ip) {
            $entries[] = $hostPort.':'.$ip;
        }

        return $entries;
    }

    public function resolve(NfseContext $context): string
    {
        $endpoint = new Endpoint([
            'production' => self::DEFAULT['production'],
            'homologation' => self::DEFAULT['homologation'],
        ]);

        $codigo = $context->codigoMunicipio;

        if ($codigo && isset(self::$endpoints[$codigo])) {
            $data = self::$endpoints[$codigo];

            $endpoint = new Endpoint([
                'production' => $data['production'],
                'homologation' => $data['homologation'],
            ]);
        }

        if ($context->endpoint) {
            $endpoint = $context->endpoint;
        }

        return $context->ambiente === TipoAmbiente::Producao
            ? $endpoint->production
            : $endpoint->homologation;
    }

    /**
     * URL do DANFSe no endpoint próprio do município, ou null quando o município
     * não possui endpoint mapeado (nesse caso o download segue pelo ADN nacional).
     */
    public function resolveDanfse(NfseContext $context, string $chaveAcesso): ?string
    {
        if (! $context->codigoMunicipio || ! isset(self::$endpoints[$context->codigoMunicipio])) {
            return null;
        }

        return rtrim($this->resolve($context), '/')."/danfse/{$chaveAcesso}/pdf";
    }
}
