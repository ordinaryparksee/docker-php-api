<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ConfigHealthcheck
{
    /**
     * The test to perform. Possible values are:.

    - `{}` inherit healthcheck from image or parent image
    - `{"NONE"}` disable healthcheck
    - `{"CMD", args...}` exec arguments directly
    - `{"CMD-SHELL", command}` run command with system's default shell

     *
     * @var string[]
     */
    protected $test;
    /**
     * The time to wait between checks in nanoseconds. 0 means inherit.
     *
     * @var int
     */
    protected $interval;
    /**
     * The time to wait before considering the check to have hung. 0 means inherit.
     *
     * @var int
     */
    protected $timeout;
    /**
     * The number of consecutive failures needed to consider a container as unhealthy. 0 means inherit.
     *
     * @var int
     */
    protected $retries;

    /**
     * The test to perform. Possible values are:.

    - `{}` inherit healthcheck from image or parent image
    - `{"NONE"}` disable healthcheck
    - `{"CMD", args...}` exec arguments directly
    - `{"CMD-SHELL", command}` run command with system's default shell

     *
     * @return string[]
     */
    public function getTest(): ?array
    {
        return $this->test;
    }

    /**
     * The test to perform. Possible values are:.

    - `{}` inherit healthcheck from image or parent image
    - `{"NONE"}` disable healthcheck
    - `{"CMD", args...}` exec arguments directly
    - `{"CMD-SHELL", command}` run command with system's default shell

     *
     * @param string[] $test
     *
     * @return self
     */
    public function setTest(?array $test): self
    {
        $this->test = $test;

        return $this;
    }

    /**
     * The time to wait between checks in nanoseconds. 0 means inherit.
     *
     * @return int
     */
    public function getInterval(): ?int
    {
        return $this->interval;
    }

    /**
     * The time to wait between checks in nanoseconds. 0 means inherit.
     *
     * @param int $interval
     *
     * @return self
     */
    public function setInterval(?int $interval): self
    {
        $this->interval = $interval;

        return $this;
    }

    /**
     * The time to wait before considering the check to have hung. 0 means inherit.
     *
     * @return int
     */
    public function getTimeout(): ?int
    {
        return $this->timeout;
    }

    /**
     * The time to wait before considering the check to have hung. 0 means inherit.
     *
     * @param int $timeout
     *
     * @return self
     */
    public function setTimeout(?int $timeout): self
    {
        $this->timeout = $timeout;

        return $this;
    }

    /**
     * The number of consecutive failures needed to consider a container as unhealthy. 0 means inherit.
     *
     * @return int
     */
    public function getRetries(): ?int
    {
        return $this->retries;
    }

    /**
     * The number of consecutive failures needed to consider a container as unhealthy. 0 means inherit.
     *
     * @param int $retries
     *
     * @return self
     */
    public function setRetries(?int $retries): self
    {
        $this->retries = $retries;

        return $this;
    }
}
