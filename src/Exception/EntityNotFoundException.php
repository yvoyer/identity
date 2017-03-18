<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity\Exception;

use Star\Component\Identity\Identity;

/**
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Identity\Exception
 */
class EntityNotFoundException extends \Exception {
	/**
	 * @param Identity $identity
	 *
	 * @return EntityNotFoundException
	 */
	public static function objectWithIdentity(Identity $identity)
	{
		return new self(
			sprintf(
				"Object of class '%s' with identity '%s' could not be found.",
				$identity->entityClass(),
				$identity->toString()
			)
		);
	}
}
