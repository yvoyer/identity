<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity\Generator;

use Star\Component\Identity\Identity;

/**
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Identity\Generator
 */
interface IdentityGenerator
{
    /**
     * @return Identity
     */
    public function nextIdentity();
}
