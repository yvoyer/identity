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
	const CLASS_NAME = __CLASS__;

	/**
	 * @param Identity $identity
	 *
	 * @return static
	 */
	public static function objectWithIdentity(Identity $identity)
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
	public static function objectWithAttribute($class, $attribute, $value)
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
