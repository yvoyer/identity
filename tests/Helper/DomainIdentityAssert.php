<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity\Helper;

/**
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Identity\Helper
 */
trait DomainIdentityAssert
{
    protected function assertInstanceOfDomainIdentity($object)
    {
        $this->assertInstanceOf('Star\Component\Identity\Identity', $object);
    }

    protected function assertInstanceOfDomainIdentityGenerator($object)
    {
        $this->assertInstanceOf('Star\Component\Identity\Generator\IdentityGenerator', $object);
    }
}
