<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

use Star\Component\Identity\Exception\IdentityAssertion;

class CompositeIdentity implements Identity
{
    /**
     * @var Identity[]
     */
    private $ids = array();

    /**
     * @param Identity[] $ids
     *
     * @throws Exception\InvalidArgumentException
     */
    public function __construct(array $ids = array())
    {
        IdentityAssertion::greaterThan(count($ids), 0, 'Identity value should have at least one identity.');
        foreach ($ids as $id) {
            $this->addIdentity($id);
        }
    }

    /**
     * @param Identity $identity
     */
    protected function addIdentity(Identity $identity)
    {
        $this->ids[] = $identity->toString();
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
        return strval(implode(' ', $this->ids));
    }
}
