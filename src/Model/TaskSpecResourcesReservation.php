<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class TaskSpecResourcesReservation
{
    /**
     * CPU reservation in units of 10<sup>-9</sup> CPU shares.
     *
     * @var int
     */
    protected $nanoCPUs;
    /**
     * Memory reservation in Bytes.
     *
     * @var int
     */
    protected $memoryBytes;

    /**
     * CPU reservation in units of 10<sup>-9</sup> CPU shares.
     *
     * @return int
     */
    public function getNanoCPUs(): ?int
    {
        return $this->nanoCPUs;
    }

    /**
     * CPU reservation in units of 10<sup>-9</sup> CPU shares.
     *
     * @param int $nanoCPUs
     *
     * @return self
     */
    public function setNanoCPUs(?int $nanoCPUs): self
    {
        $this->nanoCPUs = $nanoCPUs;

        return $this;
    }

    /**
     * Memory reservation in Bytes.
     *
     * @return int
     */
    public function getMemoryBytes(): ?int
    {
        return $this->memoryBytes;
    }

    /**
     * Memory reservation in Bytes.
     *
     * @param int $memoryBytes
     *
     * @return self
     */
    public function setMemoryBytes(?int $memoryBytes): self
    {
        $this->memoryBytes = $memoryBytes;

        return $this;
    }
}
