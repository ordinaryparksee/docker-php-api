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

class InfoGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\InfoGetResponse200';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\InfoGetResponse200;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\InfoGetResponse200();
        if (property_exists($data, 'Architecture') && $data->{'Architecture'} !== null) {
            $object->setArchitecture($data->{'Architecture'});
        }
        if (property_exists($data, 'Containers') && $data->{'Containers'} !== null) {
            $object->setContainers($data->{'Containers'});
        }
        if (property_exists($data, 'ContainersRunning') && $data->{'ContainersRunning'} !== null) {
            $object->setContainersRunning($data->{'ContainersRunning'});
        }
        if (property_exists($data, 'ContainersStopped') && $data->{'ContainersStopped'} !== null) {
            $object->setContainersStopped($data->{'ContainersStopped'});
        }
        if (property_exists($data, 'ContainersPaused') && $data->{'ContainersPaused'} !== null) {
            $object->setContainersPaused($data->{'ContainersPaused'});
        }
        if (property_exists($data, 'CpuCfsPeriod') && $data->{'CpuCfsPeriod'} !== null) {
            $object->setCpuCfsPeriod($data->{'CpuCfsPeriod'});
        }
        if (property_exists($data, 'CpuCfsQuota') && $data->{'CpuCfsQuota'} !== null) {
            $object->setCpuCfsQuota($data->{'CpuCfsQuota'});
        }
        if (property_exists($data, 'Debug') && $data->{'Debug'} !== null) {
            $object->setDebug($data->{'Debug'});
        }
        if (property_exists($data, 'DiscoveryBackend') && $data->{'DiscoveryBackend'} !== null) {
            $object->setDiscoveryBackend($data->{'DiscoveryBackend'});
        }
        if (property_exists($data, 'DockerRootDir') && $data->{'DockerRootDir'} !== null) {
            $object->setDockerRootDir($data->{'DockerRootDir'});
        }
        if (property_exists($data, 'Driver') && $data->{'Driver'} !== null) {
            $object->setDriver($data->{'Driver'});
        }
        if (property_exists($data, 'DriverStatus') && $data->{'DriverStatus'} !== null) {
            $values = [];
            foreach ($data->{'DriverStatus'} as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setDriverStatus($values);
        }
        if (property_exists($data, 'SystemStatus') && $data->{'SystemStatus'} !== null) {
            $values_2 = [];
            foreach ($data->{'SystemStatus'} as $value_2) {
                $values_3 = [];
                foreach ($value_2 as $value_3) {
                    $values_3[] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $object->setSystemStatus($values_2);
        }
        if (property_exists($data, 'Plugins') && $data->{'Plugins'} !== null) {
            $object->setPlugins($this->denormalizer->denormalize($data->{'Plugins'}, 'Docker\\API\\Model\\InfoGetResponse200Plugins', 'json', $context));
        }
        if (property_exists($data, 'ExperimentalBuild') && $data->{'ExperimentalBuild'} !== null) {
            $object->setExperimentalBuild($data->{'ExperimentalBuild'});
        }
        if (property_exists($data, 'HttpProxy') && $data->{'HttpProxy'} !== null) {
            $object->setHttpProxy($data->{'HttpProxy'});
        }
        if (property_exists($data, 'HttpsProxy') && $data->{'HttpsProxy'} !== null) {
            $object->setHttpsProxy($data->{'HttpsProxy'});
        }
        if (property_exists($data, 'ID') && $data->{'ID'} !== null) {
            $object->setID($data->{'ID'});
        }
        if (property_exists($data, 'IPv4Forwarding') && $data->{'IPv4Forwarding'} !== null) {
            $object->setIPv4Forwarding($data->{'IPv4Forwarding'});
        }
        if (property_exists($data, 'Images') && $data->{'Images'} !== null) {
            $object->setImages($data->{'Images'});
        }
        if (property_exists($data, 'IndexServerAddress') && $data->{'IndexServerAddress'} !== null) {
            $object->setIndexServerAddress($data->{'IndexServerAddress'});
        }
        if (property_exists($data, 'InitPath') && $data->{'InitPath'} !== null) {
            $object->setInitPath($data->{'InitPath'});
        }
        if (property_exists($data, 'InitSha1') && $data->{'InitSha1'} !== null) {
            $object->setInitSha1($data->{'InitSha1'});
        }
        if (property_exists($data, 'KernelVersion') && $data->{'KernelVersion'} !== null) {
            $object->setKernelVersion($data->{'KernelVersion'});
        }
        if (property_exists($data, 'Labels') && $data->{'Labels'} !== null) {
            $values_4 = [];
            foreach ($data->{'Labels'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setLabels($values_4);
        }
        if (property_exists($data, 'MemTotal') && $data->{'MemTotal'} !== null) {
            $object->setMemTotal($data->{'MemTotal'});
        }
        if (property_exists($data, 'MemoryLimit') && $data->{'MemoryLimit'} !== null) {
            $object->setMemoryLimit($data->{'MemoryLimit'});
        }
        if (property_exists($data, 'NCPU') && $data->{'NCPU'} !== null) {
            $object->setNCPU($data->{'NCPU'});
        }
        if (property_exists($data, 'NEventsListener') && $data->{'NEventsListener'} !== null) {
            $object->setNEventsListener($data->{'NEventsListener'});
        }
        if (property_exists($data, 'NFd') && $data->{'NFd'} !== null) {
            $object->setNFd($data->{'NFd'});
        }
        if (property_exists($data, 'NGoroutines') && $data->{'NGoroutines'} !== null) {
            $object->setNGoroutines($data->{'NGoroutines'});
        }
        if (property_exists($data, 'Name') && $data->{'Name'} !== null) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'NoProxy') && $data->{'NoProxy'} !== null) {
            $object->setNoProxy($data->{'NoProxy'});
        }
        if (property_exists($data, 'OomKillDisable') && $data->{'OomKillDisable'} !== null) {
            $object->setOomKillDisable($data->{'OomKillDisable'});
        }
        if (property_exists($data, 'OSType') && $data->{'OSType'} !== null) {
            $object->setOSType($data->{'OSType'});
        }
        if (property_exists($data, 'OomScoreAdj') && $data->{'OomScoreAdj'} !== null) {
            $object->setOomScoreAdj($data->{'OomScoreAdj'});
        }
        if (property_exists($data, 'OperatingSystem') && $data->{'OperatingSystem'} !== null) {
            $object->setOperatingSystem($data->{'OperatingSystem'});
        }
        if (property_exists($data, 'RegistryConfig') && $data->{'RegistryConfig'} !== null) {
            $object->setRegistryConfig($this->denormalizer->denormalize($data->{'RegistryConfig'}, 'Docker\\API\\Model\\InfoGetResponse200RegistryConfig', 'json', $context));
        }
        if (property_exists($data, 'SwapLimit') && $data->{'SwapLimit'} !== null) {
            $object->setSwapLimit($data->{'SwapLimit'});
        }
        if (property_exists($data, 'SystemTime') && $data->{'SystemTime'} !== null) {
            $object->setSystemTime($data->{'SystemTime'});
        }
        if (property_exists($data, 'ServerVersion') && $data->{'ServerVersion'} !== null) {
            $object->setServerVersion($data->{'ServerVersion'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getArchitecture()) {
            $data->{'Architecture'} = $object->getArchitecture();
        }
        if (null !== $object->getContainers()) {
            $data->{'Containers'} = $object->getContainers();
        }
        if (null !== $object->getContainersRunning()) {
            $data->{'ContainersRunning'} = $object->getContainersRunning();
        }
        if (null !== $object->getContainersStopped()) {
            $data->{'ContainersStopped'} = $object->getContainersStopped();
        }
        if (null !== $object->getContainersPaused()) {
            $data->{'ContainersPaused'} = $object->getContainersPaused();
        }
        if (null !== $object->getCpuCfsPeriod()) {
            $data->{'CpuCfsPeriod'} = $object->getCpuCfsPeriod();
        }
        if (null !== $object->getCpuCfsQuota()) {
            $data->{'CpuCfsQuota'} = $object->getCpuCfsQuota();
        }
        if (null !== $object->getDebug()) {
            $data->{'Debug'} = $object->getDebug();
        }
        if (null !== $object->getDiscoveryBackend()) {
            $data->{'DiscoveryBackend'} = $object->getDiscoveryBackend();
        }
        if (null !== $object->getDockerRootDir()) {
            $data->{'DockerRootDir'} = $object->getDockerRootDir();
        }
        if (null !== $object->getDriver()) {
            $data->{'Driver'} = $object->getDriver();
        }
        if (null !== $object->getDriverStatus()) {
            $values = [];
            foreach ($object->getDriverStatus() as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $data->{'DriverStatus'} = $values;
        }
        if (null !== $object->getSystemStatus()) {
            $values_2 = [];
            foreach ($object->getSystemStatus() as $value_2) {
                $values_3 = [];
                foreach ($value_2 as $value_3) {
                    $values_3[] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $data->{'SystemStatus'} = $values_2;
        }
        if (null !== $object->getPlugins()) {
            $data->{'Plugins'} = $this->normalizer->normalize($object->getPlugins(), 'json', $context);
        }
        if (null !== $object->getExperimentalBuild()) {
            $data->{'ExperimentalBuild'} = $object->getExperimentalBuild();
        }
        if (null !== $object->getHttpProxy()) {
            $data->{'HttpProxy'} = $object->getHttpProxy();
        }
        if (null !== $object->getHttpsProxy()) {
            $data->{'HttpsProxy'} = $object->getHttpsProxy();
        }
        if (null !== $object->getID()) {
            $data->{'ID'} = $object->getID();
        }
        if (null !== $object->getIPv4Forwarding()) {
            $data->{'IPv4Forwarding'} = $object->getIPv4Forwarding();
        }
        if (null !== $object->getImages()) {
            $data->{'Images'} = $object->getImages();
        }
        if (null !== $object->getIndexServerAddress()) {
            $data->{'IndexServerAddress'} = $object->getIndexServerAddress();
        }
        if (null !== $object->getInitPath()) {
            $data->{'InitPath'} = $object->getInitPath();
        }
        if (null !== $object->getInitSha1()) {
            $data->{'InitSha1'} = $object->getInitSha1();
        }
        if (null !== $object->getKernelVersion()) {
            $data->{'KernelVersion'} = $object->getKernelVersion();
        }
        if (null !== $object->getLabels()) {
            $values_4 = [];
            foreach ($object->getLabels() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'Labels'} = $values_4;
        }
        if (null !== $object->getMemTotal()) {
            $data->{'MemTotal'} = $object->getMemTotal();
        }
        if (null !== $object->getMemoryLimit()) {
            $data->{'MemoryLimit'} = $object->getMemoryLimit();
        }
        if (null !== $object->getNCPU()) {
            $data->{'NCPU'} = $object->getNCPU();
        }
        if (null !== $object->getNEventsListener()) {
            $data->{'NEventsListener'} = $object->getNEventsListener();
        }
        if (null !== $object->getNFd()) {
            $data->{'NFd'} = $object->getNFd();
        }
        if (null !== $object->getNGoroutines()) {
            $data->{'NGoroutines'} = $object->getNGoroutines();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getNoProxy()) {
            $data->{'NoProxy'} = $object->getNoProxy();
        }
        if (null !== $object->getOomKillDisable()) {
            $data->{'OomKillDisable'} = $object->getOomKillDisable();
        }
        if (null !== $object->getOSType()) {
            $data->{'OSType'} = $object->getOSType();
        }
        if (null !== $object->getOomScoreAdj()) {
            $data->{'OomScoreAdj'} = $object->getOomScoreAdj();
        }
        if (null !== $object->getOperatingSystem()) {
            $data->{'OperatingSystem'} = $object->getOperatingSystem();
        }
        if (null !== $object->getRegistryConfig()) {
            $data->{'RegistryConfig'} = $this->normalizer->normalize($object->getRegistryConfig(), 'json', $context);
        }
        if (null !== $object->getSwapLimit()) {
            $data->{'SwapLimit'} = $object->getSwapLimit();
        }
        if (null !== $object->getSystemTime()) {
            $data->{'SystemTime'} = $object->getSystemTime();
        }
        if (null !== $object->getServerVersion()) {
            $data->{'ServerVersion'} = $object->getServerVersion();
        }

        return $data;
    }
}
