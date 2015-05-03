<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

/**
 * Class Identity
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Identity
 */
interface Identity
{
    /**
     * @return string
     */
    public function id();

    /**
     * @return string
     */
    public function __toString();
}
