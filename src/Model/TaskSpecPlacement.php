<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class TaskSpecPlacement
{
    /**
     * An array of constraints.
     *
     * @var string[]
     */
    protected $constraints;

    /**
     * An array of constraints.
     *
     * @return string[]
     */
    public function getConstraints(): ?array
    {
        return $this->constraints;
    }

    /**
     * An array of constraints.
     *
     * @param string[] $constraints
     *
     * @return self
     */
    public function setConstraints(?array $constraints): self
    {
        $this->constraints = $constraints;

        return $this;
    }
}
