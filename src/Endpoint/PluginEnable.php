<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Endpoint;

class PluginEnable extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\AmpArtaxEndpoint, \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $name;

    /**
     * @param string $name            The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
     * @param array  $queryParameters {
     *
     *     @var int $timeout Set the HTTP client timeout (in seconds)
     * }
     */
    public function __construct(string $name, array $queryParameters = [])
    {
        $this->name = $name;
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\AmpArtaxEndpointTrait, \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{name}'], [$this->name], '/plugins/{name}/enable');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['timeout']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['timeout' => 0]);
        $optionsResolver->setAllowedTypes('timeout', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\PluginEnableInternalServerErrorException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\PluginEnableInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
}
