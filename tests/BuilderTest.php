<?php
/**
 * This file is part of CssBuilder.
 *
 * CssBuilder is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * CssBuilder is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with CssBuilder.  If not, see <https://www.gnu.org/licenses/>.
 */

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


    public function testToString()
    {

        $builder = BuilderFactory::create('#id');

        $css = $builder
            ->boxShadow('10px 10px 10px #000000')
            ->display('flex')
            ->alignItems('items-center');

        $this->assertEquals('#id { box-shadow: 10px 10px 10px #000000; display: flex; align-items: items-center; }', (string)$css);
    }

}
