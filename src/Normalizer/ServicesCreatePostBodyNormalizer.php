<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ServicesCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ServicesCreatePostBody';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\ServicesCreatePostBody;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\ServicesCreatePostBody();
        if (property_exists($data, 'Name') && $data->{'Name'} !== null) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Labels') && $data->{'Labels'} !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        if (property_exists($data, 'TaskTemplate') && $data->{'TaskTemplate'} !== null) {
            $object->setTaskTemplate($this->denormalizer->denormalize($data->{'TaskTemplate'}, 'Docker\\API\\Model\\TaskSpec', 'json', $context));
        }
        if (property_exists($data, 'Mode') && $data->{'Mode'} !== null) {
            $object->setMode($this->denormalizer->denormalize($data->{'Mode'}, 'Docker\\API\\Model\\ServiceSpecMode', 'json', $context));
        }
        if (property_exists($data, 'UpdateConfig') && $data->{'UpdateConfig'} !== null) {
            $object->setUpdateConfig($this->denormalizer->denormalize($data->{'UpdateConfig'}, 'Docker\\API\\Model\\ServiceSpecUpdateConfig', 'json', $context));
        }
        if (property_exists($data, 'Networks') && $data->{'Networks'} !== null) {
            $values_1 = [];
            foreach ($data->{'Networks'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\ServiceSpecNetworksItem', 'json', $context);
            }
            $object->setNetworks($values_1);
        }
        if (property_exists($data, 'EndpointSpec') && $data->{'EndpointSpec'} !== null) {
            $object->setEndpointSpec($this->denormalizer->denormalize($data->{'EndpointSpec'}, 'Docker\\API\\Model\\EndpointSpec', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getLabels()) {
            $values = new \stdClass();
            foreach ($object->getLabels() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Labels'} = $values;
        }
        if (null !== $object->getTaskTemplate()) {
            $data->{'TaskTemplate'} = $this->normalizer->normalize($object->getTaskTemplate(), 'json', $context);
        }
        if (null !== $object->getMode()) {
            $data->{'Mode'} = $this->normalizer->normalize($object->getMode(), 'json', $context);
        }
        if (null !== $object->getUpdateConfig()) {
            $data->{'UpdateConfig'} = $this->normalizer->normalize($object->getUpdateConfig(), 'json', $context);
        }
        if (null !== $object->getNetworks()) {
            $values_1 = [];
            foreach ($object->getNetworks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Networks'} = $values_1;
        }
        if (null !== $object->getEndpointSpec()) {
            $data->{'EndpointSpec'} = $this->normalizer->normalize($object->getEndpointSpec(), 'json', $context);
        }

        return $data;
    }
}
