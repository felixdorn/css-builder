# Tag
![Packagist](https://img.shields.io/packagist/l/felixdorn/css-builder)
![Packagist Version](https://img.shields.io/packagist/v/felixdorn/css-builder)
[![Build Status](https://travis-ci.org/felixdorn/css-builder.svg?branch=master)](https://travis-ci.org/felixdorn/css-builder)
[![codecov](https://img.shields.io/codecov/c/github/felixdorn/css-builder)](https://codecov.io/gh/felixdorn/css-builder)
![Packagist](https://img.shields.io/packagist/dm/felixdorn/css-builder)

### Installation (with composer) 
`composer require felixdorn/css-builder`

### Getting started

#### Creating CSS builder
##### OOP
```php
$builder = BuilderFactory::create('.selector');
```
##### With a function
```php
$builder = css('#div');
```

#### Adding attributes
Tag use magic method `__call` to add attributes. In theory, you can add any property you want, 
but there is 590+ property registered based on W3C spec.
```php
$builder
    ->boxShadow('10px 10px 10px #000000')
    ->display('flex')
    ->alignItems('items-center')
    ->getCss()
```

> The builder support `__toString` for easier conversion. Et voilà.

#### Credits
* [Félix Dorn](mailto:github@felixdorn.fr)

#### License
