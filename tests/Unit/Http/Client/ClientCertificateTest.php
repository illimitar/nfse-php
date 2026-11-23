<?php

namespace Nfse\Tests\Unit\Http\Client;

use Nfse\Enums\TipoAmbiente;
use Nfse\Http\Client\AdnClient;
use Nfse\Http\Client\CncClient;
use Nfse\Http\Client\SefinClient;
use Nfse\Http\NfseContext;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class ClientCertificateTest extends TestCase
{
    public function test_nss_selector_is_used_by_all_http_clients(): void
    {
        $selector = 'NSS Certificate DB:Test Certificate';
        $context = new NfseContext(
            TipoAmbiente::Homologacao,
            null,
            '',
            null,
            null,
            null,
            $selector
        );

        foreach ([new AdnClient($context), new CncClient($context), new SefinClient($context)] as $client) {
            $httpClient = (function ($client) { $p = (new ReflectionClass($client))->getProperty('httpClient'); $p->setAccessible(true); return $p->getValue($client); })($client);
            $curlOptions = $httpClient->getConfig('curl');

            $this->assertSame('ENG', $curlOptions[CURLOPT_SSLCERTTYPE]);
            $this->assertSame($selector, $curlOptions[CURLOPT_SSLCERT]);
        }
    }
}
