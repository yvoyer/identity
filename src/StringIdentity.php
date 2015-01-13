<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

use Star\Component\Identity\Exception\InvalidArgumentException;

/**
 * Class StringIdentity
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Identity
 */
class StringIdentity implements Identity
{
    /**
     * @var string
     */
    private $id;

    /**
     * @param mixed $id
     *
     * @throws Exception\InvalidArgumentException
     */
    public function __construct($id = null)
    {
        if (false === is_string($id) && null !== $id) {
            throw new InvalidArgumentException('The id should be string or null value.');
        }

        $this->id = $id;
    }

    /**
     * @return string
     */
    public function id()
    {
        return strval($this->id);
    }
}
