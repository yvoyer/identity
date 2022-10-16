<?php declare(strict_types=1);

/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

class IntegerIdentity implements Identity
{
    private int $id;

    public function __construct(int $id)
    {
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
