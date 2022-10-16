# Upgrade notes

## Upgrading to 2.0.0

* Type hint was added on all classes, some loose typing assertion were removed.
* `IntegerId` class was renamed to [IntegerIdentity](/src/IntegerIdentity.php).
* Remove `array` parameter in [CompositeIdentity::__construct()](/src/CompositeIdentity.php)
* Remove of dependency to `beberlei/assert`
* [InvalidArgumentException](src/Exception/InvalidArgumentException.php) now extends `\InvalidArgumentException`
 instead of `Assert\InvalidArgumentException`.
