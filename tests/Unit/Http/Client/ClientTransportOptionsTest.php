<?php

namespace Nfse\Tests\Unit\Http\Client;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use Nfse\Enums\TipoAmbiente;
use Nfse\Http\Client\AdnClient;
use Nfse\Http\Client\CncClient;
use Nfse\Http\Client\SefinClient;
use Nfse\Http\NfseContext;
use ReflectionClass;

it('sends the A1 certificate as P12 through cURL options, compatible with Guzzle 7.5', function (string $clientClass) {
    $mock = new MockHandler([new Response(200, [], '{}')]);
    $client = new $clientClass(new NfseContext(TipoAmbiente::Homologacao, 'fake/path.pfx', 'password'));

    $httpClient = (function ($client) { $p = (new ReflectionClass($client))->getProperty('httpClient'); $p->setAccessible(true); return $p->getValue($client); })($client);
    $httpClient->getConfig('handler')->setHandler($mock);

    $httpClient->get('/');

    $options = $mock->getLastOptions();

    expect($options['curl'][CURLOPT_SSLCERTTYPE])->toBe('P12')
        ->and($options['curl'][CURLOPT_SSLCERT])->toBe('fake/path.pfx')
        ->and($options['curl'][CURLOPT_SSLCERTPASSWD])->toBe('password')
        ->and(isset($options['cert']))->toBeFalse()
        ->and(isset($options['cert_type']))->toBeFalse()
        ->and($options['force_ip_resolve'])->toBe('v4')
        ->and($options['connect_timeout'])->toBe(10)
        ->and($options['timeout'])->toBe(60)
        ->and($options['verify'])->toBeTrue()
        ->and($mock->getLastRequest()->getProtocolVersion())->toBe('1.1');
})->with([SefinClient::class, AdnClient::class, CncClient::class]);
