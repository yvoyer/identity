<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity\Exception;

use Assert\Assertion;

final class IdentityAssertion extends Assertion {
    protected static $exceptionClass = 'Star\Component\Identity\Exception\InvalidArgumentException';
}
