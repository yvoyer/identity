<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity\Generator;

use Star\Component\Identity\Identity;
use Star\Component\Identity\IntegerId;

/**
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Identity\Generator
 */
final class AutoIncrement implements IdentityGenerator
{
    /**
     * @return Identity
     */
    public function nextIdentity()
    {
        return new IntegerId();
    }
}
