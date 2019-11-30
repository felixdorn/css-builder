<?php


if (function_exists('css') === false) {
    function css(string $selector) {
        return \Felix\CssBuilder\BuilderFactory::create($selector);
    }
}
