<?php declare(strict_types=1);

/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity\Exception;

use Star\Component\Identity\Identity;
use Throwable;

class EntityNotFoundException extends \Exception
{
    final public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @param Identity $identity
     *
     * @return static
     */
    public static function objectWithIdentity(Identity $identity): self
    {
        return new static(
            sprintf(
                "Object of class '%s' with identity '%s' could not be found.",
                $identity->entityClass(),
                $identity->toString()
            )
        );
    }

    /**
     * @param string $class
     * @param string $attribute
     * @param string $value
     *
     * @return static
     */
    public static function objectWithAttribute(string $class, string $attribute, string $value): self
    {
        return new static(
            sprintf(
                "Object of class '%s' with %s '%s' could not be found.",
                $class,
                $attribute,
                $value
            )
        );
    }
}
