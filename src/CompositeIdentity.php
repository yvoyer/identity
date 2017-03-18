<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

use Star\Component\Identity\Exception\InvalidArgumentException;

/**
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Identity
 */
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
        if (empty($ids)) {
            throw new InvalidArgumentException('The id should have at least on identity.');
        }

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
