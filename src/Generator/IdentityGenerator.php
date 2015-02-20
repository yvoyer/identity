<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity\Generator;

use Star\Component\Identity\Identity;

/**
 * Class IdentityGenerator
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Identity\Generator
 */
interface IdentityGenerator
{
    const INTERFACE_NAME = __CLASS__;

    /**
     * @return Identity
     */
    public function nextIdentity();
}
