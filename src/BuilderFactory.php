<?php


namespace Felix\CssBuilder;


class BuilderFactory
{
    public static function create(string $selector): Builder {
        return new Builder($selector);
    }
}
