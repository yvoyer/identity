<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

use Star\Component\Identity\Exception\IdentityAssertion;

class StringIdentity implements Identity
{
    /**
     * @var string
     */
    private $id;

    /**
     * @param string $id
     *
     * @throws Exception\InvalidArgumentException
     */
    public function __construct($id)
    {
        IdentityAssertion::string($id, 'Identity value "%s" expected to be string, type %s given.');
        IdentityAssertion::notEmpty($id, 'Identity value "%s" is empty, but non empty value was expected.');
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function entityClass()
    {
        return 'object';
    }

    /**
     * @return string
     */
    public function toString()
    {
        return strval($this->id);
    }
}
