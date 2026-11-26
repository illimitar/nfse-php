<?php

namespace Nfse\Tests\Unit\Xml;

use InvalidArgumentException;
use Nfse\Enums\TipoAmbiente;
use Nfse\Xml\SchemaDps;

it('aponta producao para o schema atual e homologacao para o pacote 20261124', function () {
    expect(SchemaDps::padrao(TipoAmbiente::Producao))->toBe(SchemaDps::Producao)
        ->and(SchemaDps::Producao)->toBe('20261020')
        ->and(SchemaDps::padrao(TipoAmbiente::Homologacao))->toBe(SchemaDps::Homologacao)
        ->and(SchemaDps::Homologacao)->toBe('20261124');
});

it('resolve a versao informada e recusa schema desconhecido', function () {
    expect(SchemaDps::resolver('20261020'))->toBe(SchemaDps::Producao)
        ->and(SchemaDps::resolver('20261124', TipoAmbiente::Producao))->toBe(SchemaDps::Homologacao)
        ->and(SchemaDps::resolver(null, TipoAmbiente::Homologacao))->toBe(SchemaDps::Homologacao);

    expect(function () {
        SchemaDps::resolver('19990101');
    })->toThrow(InvalidArgumentException::class, 'Schema não encontrado: 19990101');
});

it('aponta a pasta de cada pacote que permanece no projeto', function () {
    expect(is_dir(SchemaDps::pasta(SchemaDps::Producao)))->toBeTrue()
        ->and(str_ends_with(SchemaDps::pasta(SchemaDps::Producao), '/references/schemas/20261020'))->toBeTrue()
        ->and(is_dir(SchemaDps::pasta(SchemaDps::Homologacao)))->toBeTrue()
        ->and(str_ends_with(SchemaDps::pasta(SchemaDps::Homologacao), '/references/schemas/20261124'))->toBeTrue()
        ->and(is_file(SchemaDps::pasta(SchemaDps::Producao).'/DPS_v1.01.xsd'))->toBeTrue()
        ->and(is_file(SchemaDps::pasta(SchemaDps::Homologacao).'/DPS_v1.01.xsd'))->toBeTrue();
});
