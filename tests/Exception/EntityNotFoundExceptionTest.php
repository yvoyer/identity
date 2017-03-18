<?php

namespace Star\Component\Identity\Exception;

use Star\Component\Identity\CompositeIdentity;
use Star\Component\Identity\Identity;
use Star\Component\Identity\IntegerId;
use Star\Component\Identity\StringIdentity;

final class EntityNotFoundExceptionTest extends \PHPUnit_Framework_TestCase {
	/**
	 * @param Identity $identity
	 *
	 * @dataProvider provideIdentities
	 */
	public function test_it_should_return_a_valid_message(Identity $identity) {
		$ex = EntityNotFoundException::objectWithIdentity($identity);
		$this->assertSame("Object of class 'object' with identity '4' could not be found.", $ex->getMessage());
	}

	public static function provideIdentities()
	{
		return array(
			array(new IntegerId(4)),
			array(new StringIdentity('4')),
			array(new CompositeIdentity(array(new IntegerId(4)))),
		);
	}
}
