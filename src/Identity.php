<?php declare(strict_types=1);

/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

interface Identity
{
    /**
     * Returns the entity class for the identity.
     *
     * @return string
     */
    public function entityClass(): string;

    /**
     * Returns the string value of the identity.
     *
     * @return string
     */
    public function toString(): string;
}
