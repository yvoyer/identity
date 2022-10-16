<?php declare(strict_types=1);

/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

use PHPUnit\Framework\TestCase;

final class IntegerIdentityTest extends TestCase
{
    public function test_should_return_integer_value(): void
    {
        $id = new IntegerIdentity(12);
        $this->assertSame('12', $id->toString());
    }

    public function test_it_should_be_converted_to_string(): void
    {
        $this->assertSame('123', (new IntegerIdentity(123))->toString());
    }
}
