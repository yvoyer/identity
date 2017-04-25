<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity\Helper;

trait DomainIdentityMock
{
    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getMockDomainIdentity()
    {
        return $this->getMock('Star\Component\Identity\Identity');
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getMockDomainIdentityGenerator()
    {
        return $this->getMock('Star\Component\Identity\Generator\IdentityGenerator');
    }
}
