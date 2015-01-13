<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

/**
 * Class CompositeIdentityTest
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Identity
 */
final class CompositeIdentityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException        \Star\Component\Identity\Exception\InvalidArgumentException
     * @expectedExceptionMessage The id should have at least on identity.
     */
    public function test_should_have_at_least_on_identity()
    {
        new CompositeIdentity(array());
    }

    public function test_should_be_composed_of_multiple_identities()
    {
        $id1 = $this->getMockIdentity(1);
        $id2 = $this->getMockIdentity(2);
        $id3 = $this->getMockIdentity(3);

        $identity = new CompositeIdentity(array($id1, $id2, $id3));
        $this->assertSame('1 2 3', $identity->id());
    }

    /**
     * @param $id
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function getMockIdentity($id)
    {
        $mock = $this->getMock('Star\Component\Identity\Identity');
        $mock
            ->expects($this->any())
            ->method('id')
            ->willReturn($id);

        return $mock;
    }
}
