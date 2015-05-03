<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

use Star\Component\Identity\Exception\InvalidArgumentException;

/**
 * Class IntegerId
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Identity
 */
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
    public function __construct($id = null)
    {
        if (false === is_integer($id) && null !== $id) {
            throw new InvalidArgumentException('The id should be int or null value.');
        }

        $this->id = $id;
    }

    /**
     * @return string
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return strval($this->id);
    }
}
