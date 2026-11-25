<?php

require __DIR__.'/vendor/autoload.php';

use Nfse\Dto\Nfse\CodigoServicoData;
use Nfse\Dto\Nfse\DescontoData;
use Nfse\Dto\Nfse\EnderecoData;
use Nfse\Dto\Nfse\InfDpsData;
use Nfse\Dto\Nfse\IntermediarioData;
use Nfse\Dto\Nfse\LocalPrestacaoData;
use Nfse\Dto\Nfse\PrestadorData;
use Nfse\Dto\Nfse\RegimeTributarioData;
use Nfse\Dto\Nfse\ServicoData;
use Nfse\Dto\Nfse\SubstituicaoData;
use Nfse\Dto\Nfse\TomadorData;
use Nfse\Dto\Nfse\TributacaoData;
use Nfse\Dto\Nfse\ValoresData;
use Nfse\Dto\Nfse\ValorServicoPrestadoData;

try {
    $infDps = new InfDpsData(
        'DPS123',
        2,
        '2023-10-27T10:00:00',
        '1.0',
        '1',
        '1001',
        '2023-10-27',
        1,
        '3550308',
        new SubstituicaoData(
            'NFS123',
            '01',
            'Erro de preenchimento'
        ),
        new PrestadorData(
            '12345678000199',
            null,
            null,
            null,
            null,
            '12345',
            'Prestador Exemplo Ltda',
            new EnderecoData(
                'Exemplo',
                '100',
                'Centro',
                '3550308',
                '01001000'
            ),
            '11999999999',
            'prestador@example.com',
            new RegimeTributarioData(
                1,
                0,
                0
            )
        ),
        new TomadorData(
            '11122233344',
            null,
            null,
            null,
            null,
            null,
            'Tomador Exemplo',
            new EnderecoData(
                'Brasil',
                '200',
                'Jardins',
                '3550308',
                '01002000'
            ),
            '11888888888',
            'tomador@example.com'
        ),
        new IntermediarioData(
            '98765432000100',
            null,
            null,
            null,
            null,
            '54321',
            'Intermediario Ltda',
            new EnderecoData(
                'Meio',
                '50',
                'Centro',
                '3550308',
                '01003000'
            ),
            '11777777777',
            'interm@example.com'
        ),
        new ServicoData(
            new LocalPrestacaoData(
                '3550308',
                'BR'
            ),
            new CodigoServicoData(
                '1.01',
                '1010',
                'Analise de sistemas',
                '1234',
                'SERV001'
            ),
            null,
            null,
            null,
            'Serviço prestado com excelência',
            null,
            null,
            null
        ),
        new ValoresData(
            new ValorServicoPrestadoData(
                1000.00,
                1000.00
            ),
            new DescontoData(
                0.0,
                0.0
            ),
            null,
            new TributacaoData(
            )
        )
    );

    echo "InfDpsData created successfully!\n";
    var_dump($infDps);

} catch (\Throwable $e) {
    echo 'Error: '.$e->getMessage()."\n";
    echo $e->getTraceAsString();
}
