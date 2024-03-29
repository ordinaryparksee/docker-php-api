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

class ConfigHealthcheckNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ConfigHealthcheck';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\ConfigHealthcheck;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\ConfigHealthcheck();
        if (property_exists($data, 'Test') && $data->{'Test'} !== null) {
            $values = [];
            foreach ($data->{'Test'} as $value) {
                $values[] = $value;
            }
            $object->setTest($values);
        }
        if (property_exists($data, 'Interval') && $data->{'Interval'} !== null) {
            $object->setInterval($data->{'Interval'});
        }
        if (property_exists($data, 'Timeout') && $data->{'Timeout'} !== null) {
            $object->setTimeout($data->{'Timeout'});
        }
        if (property_exists($data, 'Retries') && $data->{'Retries'} !== null) {
            $object->setRetries($data->{'Retries'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTest()) {
            $values = [];
            foreach ($object->getTest() as $value) {
                $values[] = $value;
            }
            $data->{'Test'} = $values;
        }
        if (null !== $object->getInterval()) {
            $data->{'Interval'} = $object->getInterval();
        }
        if (null !== $object->getTimeout()) {
            $data->{'Timeout'} = $object->getTimeout();
        }
        if (null !== $object->getRetries()) {
            $data->{'Retries'} = $object->getRetries();
        }

        return $data;
    }
}
