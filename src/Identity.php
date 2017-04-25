<?php
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
    public function entityClass();

    /**
     * Returns the string value of the identity.
     *
     * @return string
     */
    public function toString();
}
