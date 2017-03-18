<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity\Generator;

use Star\Component\Identity\Helper\DomainIdentityAssert;

/**
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Identity\Generator
 */
final class AutoIncrementIdTest extends \PHPUnit_Framework_TestCase
{
    use DomainIdentityAssert;

    /**
     * @var AutoIncrement
     */
    private $generator;

    public function setUp()
    {
        $this->generator = new AutoIncrement();
    }

    public function test_should_return_the_id_as_null()
    {
        $this->assertInstanceOfDomainIdentity($this->generator->nextIdentity());
        $this->assertSame('', $this->generator->nextIdentity()->toString());
    }
}
