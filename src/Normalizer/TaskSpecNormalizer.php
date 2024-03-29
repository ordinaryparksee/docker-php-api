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

class TaskSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\TaskSpec';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\TaskSpec;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\TaskSpec();
        if (property_exists($data, 'ContainerSpec') && $data->{'ContainerSpec'} !== null) {
            $object->setContainerSpec($this->denormalizer->denormalize($data->{'ContainerSpec'}, 'Docker\\API\\Model\\TaskSpecContainerSpec', 'json', $context));
        }
        if (property_exists($data, 'Resources') && $data->{'Resources'} !== null) {
            $object->setResources($this->denormalizer->denormalize($data->{'Resources'}, 'Docker\\API\\Model\\TaskSpecResources', 'json', $context));
        }
        if (property_exists($data, 'RestartPolicy') && $data->{'RestartPolicy'} !== null) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data->{'RestartPolicy'}, 'Docker\\API\\Model\\TaskSpecRestartPolicy', 'json', $context));
        }
        if (property_exists($data, 'Placement') && $data->{'Placement'} !== null) {
            $object->setPlacement($this->denormalizer->denormalize($data->{'Placement'}, 'Docker\\API\\Model\\TaskSpecPlacement', 'json', $context));
        }
        if (property_exists($data, 'ForceUpdate') && $data->{'ForceUpdate'} !== null) {
            $object->setForceUpdate($data->{'ForceUpdate'});
        }
        if (property_exists($data, 'Networks') && $data->{'Networks'} !== null) {
            $values = [];
            foreach ($data->{'Networks'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\TaskSpecNetworksItem', 'json', $context);
            }
            $object->setNetworks($values);
        }
        if (property_exists($data, 'LogDriver') && $data->{'LogDriver'} !== null) {
            $object->setLogDriver($this->denormalizer->denormalize($data->{'LogDriver'}, 'Docker\\API\\Model\\TaskSpecLogDriver', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getContainerSpec()) {
            $data->{'ContainerSpec'} = $this->normalizer->normalize($object->getContainerSpec(), 'json', $context);
        }
        if (null !== $object->getResources()) {
            $data->{'Resources'} = $this->normalizer->normalize($object->getResources(), 'json', $context);
        }
        if (null !== $object->getRestartPolicy()) {
            $data->{'RestartPolicy'} = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
        }
        if (null !== $object->getPlacement()) {
            $data->{'Placement'} = $this->normalizer->normalize($object->getPlacement(), 'json', $context);
        }
        if (null !== $object->getForceUpdate()) {
            $data->{'ForceUpdate'} = $object->getForceUpdate();
        }
        if (null !== $object->getNetworks()) {
            $values = [];
            foreach ($object->getNetworks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Networks'} = $values;
        }
        if (null !== $object->getLogDriver()) {
            $data->{'LogDriver'} = $this->normalizer->normalize($object->getLogDriver(), 'json', $context);
        }

        return $data;
    }
}
