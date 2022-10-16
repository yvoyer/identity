<?php declare(strict_types=1);

/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

use Star\Component\Identity\Exception\InvalidArgumentException;
use function mb_strlen;
use function sprintf;

class StringIdentity implements Identity
{
    private string $id;

    public function __construct(string $id)
    {
        if (mb_strlen($id) === 0) {
            throw new InvalidArgumentException(
                sprintf('Identity value "%s" is empty, but non empty value was expected.', $id)
            );
        }
        $this->id = $id;
    }

    public function entityClass(): string
    {
        return 'object';
    }

    public function toString(): string
    {
        return strval($this->id);
    }
}
