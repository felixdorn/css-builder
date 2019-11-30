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

namespace Felix\CssBuilder;


class BuilderFactory
{
    public static function create(string $selector): Builder {
        return new Builder($selector);
    }
}
