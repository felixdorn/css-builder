# Tag
![Packagist](https://img.shields.io/packagist/l/felixdorn/css-builder)
![Packagist Version](https://img.shields.io/packagist/v/felixdorn/css-builder)
[![Build Status](https://travis-ci.org/felixdorn/css-builder.svg?branch=master)](https://travis-ci.org/felixdorn/css-builder)
[![codecov](https://img.shields.io/codecov/c/github/felixdorn/css-builder)](https://codecov.io/gh/felixdorn/css-builder)
![Packagist](https://img.shields.io/packagist/dm/felixdorn/css-builder)

## Installation (with composer) 
`composer require felixdorn/css-builder`

### Requirements
* PHP >=7.3
* ext-mbstring

## Getting started
#### OOP
```php
$builder = BuilderFactory::create('.selector');
```

#### With a function
```php
$builder = css('#div');
```

## Adding attributes
Tag use magic method `__call` to add attributes. In theory, you can add any property you want, 
but there is 590+ property registered based on W3C spec.
```php
css('#div')
    ->boxShadow('10px 10px 10px #000000')
    ->display('flex')
    ->alignItems('items-center')
    ->getCss();
```

> The builder support `__toString` for easier conversion. Et voilà.

## Inline
```php
echo css()->display('flex')
    ->getCss();
// Prints "display: flex;"
```

You can force the inline conversion even if you have a selector, just call the `inline` method.

## Credits
* [Félix Dorn](mailto:github@felixdorn.fr)

## License
This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see https://www.gnu.org/licenses/
