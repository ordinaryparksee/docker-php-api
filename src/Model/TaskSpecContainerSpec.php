<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class TaskSpecContainerSpec
{
    /**
     * The image name to use for the container.
     *
     * @var string
     */
    protected $image;
    /**
     * The command to be run in the image.
     *
     * @var string[]
     */
    protected $command;
    /**
     * Arguments to the command.
     *
     * @var string[]
     */
    protected $args;
    /**
     * A list of environment variables in the form `VAR=value`.
     *
     * @var string[]
     */
    protected $env;
    /**
     * The working directory for commands to run in.
     *
     * @var string
     */
    protected $dir;
    /**
     * The user inside the container.
     *
     * @var string
     */
    protected $user;
    /**
     * User-defined key/value data.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * Whether a pseudo-TTY should be allocated.
     *
     * @var bool
     */
    protected $tTY;
    /**
     * Specification for mounts to be added to containers created as part of the service.
     *
     * @var Mount[]
     */
    protected $mounts;
    /**
     * Amount of time to wait for the container to terminate before forcefully killing it.
     *
     * @var int
     */
    protected $stopGracePeriod;
    /**
     * Specification for DNS related configurations in resolver configuration file (`resolv.conf`).
     *
     * @var TaskSpecContainerSpecDNSConfig
     */
    protected $dNSConfig;

    /**
     * The image name to use for the container.
     *
     * @return string
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * The image name to use for the container.
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * The command to be run in the image.
     *
     * @return string[]
     */
    public function getCommand(): ?array
    {
        return $this->command;
    }

    /**
     * The command to be run in the image.
     *
     * @param string[] $command
     *
     * @return self
     */
    public function setCommand(?array $command): self
    {
        $this->command = $command;

        return $this;
    }

    /**
     * Arguments to the command.
     *
     * @return string[]
     */
    public function getArgs(): ?array
    {
        return $this->args;
    }

    /**
     * Arguments to the command.
     *
     * @param string[] $args
     *
     * @return self
     */
    public function setArgs(?array $args): self
    {
        $this->args = $args;

        return $this;
    }

    /**
     * A list of environment variables in the form `VAR=value`.
     *
     * @return string[]
     */
    public function getEnv(): ?array
    {
        return $this->env;
    }

    /**
     * A list of environment variables in the form `VAR=value`.
     *
     * @param string[] $env
     *
     * @return self
     */
    public function setEnv(?array $env): self
    {
        $this->env = $env;

        return $this;
    }

    /**
     * The working directory for commands to run in.
     *
     * @return string
     */
    public function getDir(): ?string
    {
        return $this->dir;
    }

    /**
     * The working directory for commands to run in.
     *
     * @param string $dir
     *
     * @return self
     */
    public function setDir(?string $dir): self
    {
        $this->dir = $dir;

        return $this;
    }

    /**
     * The user inside the container.
     *
     * @return string
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * The user inside the container.
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * User-defined key/value data.
     *
     * @return string[]
     */
    public function getLabels(): ?\ArrayObject
    {
        return $this->labels;
    }

    /**
     * User-defined key/value data.
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
     * Whether a pseudo-TTY should be allocated.
     *
     * @return bool
     */
    public function getTTY(): ?bool
    {
        return $this->tTY;
    }

    /**
     * Whether a pseudo-TTY should be allocated.
     *
     * @param bool $tTY
     *
     * @return self
     */
    public function setTTY(?bool $tTY): self
    {
        $this->tTY = $tTY;

        return $this;
    }

    /**
     * Specification for mounts to be added to containers created as part of the service.
     *
     * @return Mount[]
     */
    public function getMounts(): ?array
    {
        return $this->mounts;
    }

    /**
     * Specification for mounts to be added to containers created as part of the service.
     *
     * @param Mount[] $mounts
     *
     * @return self
     */
    public function setMounts(?array $mounts): self
    {
        $this->mounts = $mounts;

        return $this;
    }

    /**
     * Amount of time to wait for the container to terminate before forcefully killing it.
     *
     * @return int
     */
    public function getStopGracePeriod(): ?int
    {
        return $this->stopGracePeriod;
    }

    /**
     * Amount of time to wait for the container to terminate before forcefully killing it.
     *
     * @param int $stopGracePeriod
     *
     * @return self
     */
    public function setStopGracePeriod(?int $stopGracePeriod): self
    {
        $this->stopGracePeriod = $stopGracePeriod;

        return $this;
    }

    /**
     * Specification for DNS related configurations in resolver configuration file (`resolv.conf`).
     *
     * @return TaskSpecContainerSpecDNSConfig
     */
    public function getDNSConfig(): ?TaskSpecContainerSpecDNSConfig
    {
        return $this->dNSConfig;
    }

    /**
     * Specification for DNS related configurations in resolver configuration file (`resolv.conf`).
     *
     * @param TaskSpecContainerSpecDNSConfig $dNSConfig
     *
     * @return self
     */
    public function setDNSConfig(?TaskSpecContainerSpecDNSConfig $dNSConfig): self
    {
        $this->dNSConfig = $dNSConfig;

        return $this;
    }
}
