<?php declare(strict_types=1);

namespace Star\Component\Identity\Exception;

use PHPUnit\Framework\TestCase;
use Star\Component\Identity\CompositeIdentity;
use Star\Component\Identity\Identity;
use Star\Component\Identity\IntegerIdentity;
use Star\Component\Identity\StringIdentity;

final class EntityNotFoundExceptionTest extends TestCase
{
    /**
     * @param Identity $identity
     *
     * @dataProvider provideIdentities
     */
    public function test_it_should_return_a_valid_message(Identity $identity): void
    {
        $ex = EntityNotFoundException::objectWithIdentity($identity);
        $this->assertInstanceOf(EntityNotFoundException::class, $ex);
        $this->assertSame("Object of class 'object' with identity '4' could not be found.", $ex->getMessage());
    }

    /**
     * @return Identity[][]
     */
    public static function provideIdentities(): array
    {
        return [
            [new IntegerIdentity(4)],
            [new StringIdentity('4')],
            [new CompositeIdentity(new IntegerIdentity(4))],
        ];
    }

    public function test_it_should_return_an_instance_of_the_child_type(): void
    {
        $this->assertInstanceOf(
            ExtendingException::class,
            ExtendingException::objectWithIdentity(new IntegerIdentity(12))
        );
    }

    public function test_it_should_create_an_exception_for_object_with_attribute(): void
    {
        $exception = EntityNotFoundException::objectWithAttribute('stdclass', 'attr', 'val');
        $this->assertInstanceOf(EntityNotFoundException::class, $exception);
        $this->assertSame("Object of class 'stdclass' with attr 'val' could not be found.", $exception->getMessage());

        $this->assertInstanceOf(
            ExtendingException::class,
            ExtendingException::objectWithAttribute('stdclass', 'attr', 'val')
        );
    }
}

final class ExtendingException extends EntityNotFoundException
{
}
