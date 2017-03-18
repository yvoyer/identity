# Identity package

Master: [![Build Status](https://travis-ci.org/yvoyer/identity.svg?branch=master)](https://travis-ci.org/yvoyer/identity)

## Description

This package defines an interface `Star\Component\Identity\Identity` to mark your object as entity.

It also includes some default implementations.

## Usage

### Identities

```php
$integer = new IntegerId(4);
$string = new StringId('something');
$composite = new CompositeIdentity(array($integer, $string));

$integer->toString(); // return '4'
$string->toString(); // return 'something'
$composite->toString(); // return '4 something'
```

### Exception

We also provide exception that comes bundled with messages for your identity.

