<?php


namespace Felix\Tests\CssBuilder;


use Felix\CssBuilder\Builder;
use Felix\CssBuilder\BuilderFactory;
use PHPUnit\Framework\TestCase;

class BuilderFactoryTest extends TestCase
{
    public function testCreate() {
        $builder = BuilderFactory::create('#selector');

        $this->assertInstanceOf(Builder::class, $builder);
    }
}
