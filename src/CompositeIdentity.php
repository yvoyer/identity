<?php declare(strict_types=1);

/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

use function array_map;
use function array_merge;

class CompositeIdentity implements Identity
{
    /**
     * @var Identity[]
     */
    private array $ids;

    public function __construct(Identity $first, Identity ...$others)
    {
        $this->ids = array_merge([$first], $others);
    }

    public function entityClass(): string
    {
        return 'object';
    }

    public function toString(): string
    {
        return implode(' ', array_map(new IdentityToString(), $this->ids));
    }
}
