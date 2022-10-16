<?php declare(strict_types=1);

/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

use PHPUnit\Framework\TestCase;
use Star\Component\Identity\Exception\InvalidArgumentException;

final class StringIdentityTest extends TestCase
{
    public function test_should_support_string(): void
    {
        $identity = new StringIdentity('id');
        $this->assertSame('id', $identity->toString());
    }

    public function test_it_should_be_converted_to_string(): void
    {
        $this->assertSame('id', (new StringIdentity('id'))->toString());
    }

    public function test_it_should_not_allow_empty_string(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Identity value "" is empty, but non empty value was expected.');
        new StringIdentity('');
    }
}
