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
        $this->assertInstanceOf(EntityNotFoundException::CLASS_NAME, $ex);
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

    public function test_it_should_return_an_instance_of_the_child_type()
    {
        $this->assertInstanceOf(
            ExtendingException::CLASS_NAME,
            ExtendingException::objectWithIdentity(new IntegerId(12))
        );
    }

    public function test_it_should_create_an_exception_for_object_with_attribute()
    {
        $exception = EntityNotFoundException::objectWithAttribute('stdclass', 'attr', 'val');
        $this->assertInstanceOf(EntityNotFoundException::CLASS_NAME, $exception);
        $this->assertSame("Object of class 'stdclass' with attr 'val' could not be found.", $exception->getMessage());

        $this->assertInstanceOf(
            ExtendingException::CLASS_NAME,
            ExtendingException::objectWithAttribute('stdclass', 'attr', 'val')
        );
    }
}

final class ExtendingException extends EntityNotFoundException
{
    const CLASS_NAME = __CLASS__;
}
