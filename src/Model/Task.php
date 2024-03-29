<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class Task
{
    /**
     * The ID of the task.
     *
     * @var string
     */
    protected $iD;
    /**
     * @var TaskVersion
     */
    protected $version;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;
    /**
     * Name of the task.
     *
     * @var string
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * User modifiable task configuration.
     *
     * @var TaskSpec
     */
    protected $spec;
    /**
     * The ID of the service this task is part of.
     *
     * @var string
     */
    protected $serviceID;
    /**
     * @var int
     */
    protected $slot;
    /**
     * The ID of the node that this task is on.
     *
     * @var string
     */
    protected $nodeID;
    /**
     * @var TaskStatus
     */
    protected $status;
    /**
     * @var string
     */
    protected $desiredState;

    /**
     * The ID of the task.
     *
     * @return string
     */
    public function getID(): ?string
    {
        return $this->iD;
    }

    /**
     * The ID of the task.
     *
     * @param string $iD
     *
     * @return self
     */
    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return TaskVersion
     */
    public function getVersion(): ?TaskVersion
    {
        return $this->version;
    }

    /**
     * @param TaskVersion $version
     *
     * @return self
     */
    public function setVersion(?TaskVersion $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Name of the task.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the task.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * @return string[]
     */
    public function getLabels(): ?\ArrayObject
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(?\ArrayObject $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * User modifiable task configuration.
     *
     * @return TaskSpec
     */
    public function getSpec(): ?TaskSpec
    {
        return $this->spec;
    }

    /**
     * User modifiable task configuration.
     *
     * @param TaskSpec $spec
     *
     * @return self
     */
    public function setSpec(?TaskSpec $spec): self
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * The ID of the service this task is part of.
     *
     * @return string
     */
    public function getServiceID(): ?string
    {
        return $this->serviceID;
    }

    /**
     * The ID of the service this task is part of.
     *
     * @param string $serviceID
     *
     * @return self
     */
    public function setServiceID(?string $serviceID): self
    {
        $this->serviceID = $serviceID;

        return $this;
    }

    /**
     * @return int
     */
    public function getSlot(): ?int
    {
        return $this->slot;
    }

    /**
     * @param int $slot
     *
     * @return self
     */
    public function setSlot(?int $slot): self
    {
        $this->slot = $slot;

        return $this;
    }

    /**
     * The ID of the node that this task is on.
     *
     * @return string
     */
    public function getNodeID(): ?string
    {
        return $this->nodeID;
    }

    /**
     * The ID of the node that this task is on.
     *
     * @param string $nodeID
     *
     * @return self
     */
    public function setNodeID(?string $nodeID): self
    {
        $this->nodeID = $nodeID;

        return $this;
    }

    /**
     * @return TaskStatus
     */
    public function getStatus(): ?TaskStatus
    {
        return $this->status;
    }

    /**
     * @param TaskStatus $status
     *
     * @return self
     */
    public function setStatus(?TaskStatus $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getDesiredState(): ?string
    {
        return $this->desiredState;
    }

    /**
     * @param string $desiredState
     *
     * @return self
     */
    public function setDesiredState(?string $desiredState): self
    {
        $this->desiredState = $desiredState;

        return $this;
    }
}
