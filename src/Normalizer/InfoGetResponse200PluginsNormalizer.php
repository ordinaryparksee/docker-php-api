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

class InfoGetResponse200PluginsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\InfoGetResponse200Plugins';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\InfoGetResponse200Plugins;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\InfoGetResponse200Plugins();
        if (property_exists($data, 'Volume') && $data->{'Volume'} !== null) {
            $values = [];
            foreach ($data->{'Volume'} as $value) {
                $values[] = $value;
            }
            $object->setVolume($values);
        }
        if (property_exists($data, 'Network') && $data->{'Network'} !== null) {
            $values_1 = [];
            foreach ($data->{'Network'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setNetwork($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getVolume()) {
            $values = [];
            foreach ($object->getVolume() as $value) {
                $values[] = $value;
            }
            $data->{'Volume'} = $values;
        }
        if (null !== $object->getNetwork()) {
            $values_1 = [];
            foreach ($object->getNetwork() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Network'} = $values_1;
        }

        return $data;
    }
}
