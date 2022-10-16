# Identity package

![Build Status](https://github.com/yvoyer/identity/actions/workflows/php.yml/badge.svg)

## Description

This package defines an interface `Star\Component\Identity\Identity` to mark your object as entity.

It also includes some default implementations.

## Usage

### Installation

Run `composer require star/identity` using [composer](https://getcomposer.org/).

### Identities

```php
$integer = new IntegerId(4);
$string = new StringId('something');
$composite = new CompositeIdentity($integer, $string);

$integer->toString(); // return '4'
$string->toString(); // return 'something'
$composite->toString(); // return '4 something'
```

### Exception

We also provide exception that comes bundled with messages for your identity.

