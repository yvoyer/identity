<?php declare(strict_types=1);

/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

use PHPUnit\Framework\TestCase;

final class CompositeIdentityTest extends TestCase
{
    public function test_should_be_composed_of_multiple_identities(): void
    {
        $id1 = new StubIdentity(1);
        $id2 = new StubIdentity(2);
        $id3 = new StubIdentity(3);

        $identity = new CompositeIdentity($id1, $id2, $id3);
        $this->assertSame('1 2 3', $identity->toString());
    }

    public function test_it_should_be_converted_to_string(): void
    {
        $id1 = new StubIdentity(1);
        $id2 = new StubIdentity(2);
        $id3 = new StubIdentity(3);

        $identity = new CompositeIdentity($id1, $id2, $id3);
        $this->assertSame('1 2 3', $identity->toString());
    }
}

final class StubIdentity extends IntegerIdentity
{
}
