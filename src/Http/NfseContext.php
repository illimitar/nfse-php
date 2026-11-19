<?php

namespace Nfse\Http;

final class NfseContext
{
    /** @var mixed */
    public $ambiente;

    /** @var string|null */
    public $certificatePath;

    /** @var string */
    public $certificatePassword;

    /** @var string|null */
    public $codigoMunicipio;

    /** @var mixed */
    public $endpoint;

    /** @var string|null */
    public $certificateContent;

    /** @var string|null */
    public $nssCertificateSelector;

    /**
     * @param mixed $ambiente Valor de TipoAmbiente (enum ou constante string/int)
     * @param string|null $certificatePath
     * @param string $certificatePassword
     * @param string|null $codigoMunicipio
     * @param mixed $endpoint
     * @param string|null $certificateContent
     * @param string|null $nssCertificateSelector
     */
    public function __construct(
        $ambiente,
        $certificatePath = null,
        $certificatePassword = '',
        $codigoMunicipio = null,
        $endpoint = null,
        $certificateContent = null,
        $nssCertificateSelector = null
    ) {
        $this->ambiente = $ambiente;
        $this->certificatePath = $certificatePath;
        $this->certificatePassword = $certificatePassword;
        $this->codigoMunicipio = $codigoMunicipio;
        $this->endpoint = $endpoint;
        $this->certificateContent = $certificateContent;
        $this->nssCertificateSelector = $nssCertificateSelector;

        if ($certificatePath === null && $certificateContent === null && $nssCertificateSelector === null) {
            throw new \InvalidArgumentException('Informe certificado PFX ou seletor de certificado NSS.');
        }

        if ($nssCertificateSelector !== null && trim($nssCertificateSelector) === '') {
            throw new \InvalidArgumentException('O seletor do certificado NSS não pode ser vazio.');
        }
    }
}
