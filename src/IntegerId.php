<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

use Star\Component\Identity\Exception\IdentityAssertion;

class IntegerId implements Identity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @param int $id
     *
     * @throws Exception\InvalidArgumentException
     */
    public function __construct($id)
    {
        IdentityAssertion::integerish($id, 'Identity value "%s" is not an integer value.');
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
