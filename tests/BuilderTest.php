<?php


namespace Felix\Tests\CssBuilder;


use Felix\CssBuilder\BuilderFactory;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{

    public function testCall()
    {

        $builder = BuilderFactory::create('#id');

        $css = $builder
            ->boxShadow('10px 10px 10px #000000')
            ->display('flex')
            ->alignItems('items-center')
            ->getCss();

        $this->assertEquals('#id { box-shadow: 10px 10px 10px #000000; display: flex; align-items: items-center; }', $css);
    }

}
