<?php declare(strict_types=1);

namespace Star\Component\Identity;

final class IdentityToString
{
    public function __invoke(Identity $identity): string
    {
        return $identity->toString();
    }
}
