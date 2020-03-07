<?php


use Felix\CssBuilder\Builder;
use Felix\CssBuilder\BuilderFactory;

if (function_exists('css') === false) {
    function css(string $selector = ''): Builder
    {
        return BuilderFactory::create($selector);
    }
}
