<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

/**
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
        $id1 = new StubIdentity(1);
        $id2 = new StubIdentity(2);
        $id3 = new StubIdentity(3);

        $identity = new CompositeIdentity(array($id1, $id2, $id3));
        $this->assertSame('1 2 3', $identity->toString());
    }

    public function test_it_should_be_converted_to_string()
    {
        $id1 = new StubIdentity(1);
        $id2 = new StubIdentity(2);
        $id3 = new StubIdentity(3);

        $identity = new CompositeIdentity(array($id1, $id2, $id3));
        $this->assertSame('1 2 3', $identity->toString());
    }
}

final class StubIdentity implements Identity
{
	private $id;

	/**
	 * @param $id
	 */
	public function __construct($id) {
		$this->id = $id;
	}

	/**
	 * Returns the entity class for the identity.
	 *
	 * @return string
	 */
	public function entityClass() {
		throw new \RuntimeException('Method ' . __METHOD__ . ' not implemented yet.');
	}

	/**
	 * Returns the string value of the identity.
	 *
	 * @return string
	 */
	public function toString() {
		return $this->id;
	}
}
