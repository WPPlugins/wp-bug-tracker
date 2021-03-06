<?php

/*
  Copyright (C) <2012>  Vasyl Martyniuk <martyniuk.vasyl@gmail.com>

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

return array(
    //default Module Directory
    'moduleDir' => realpath(dirname(__FILE__) . '/..'),
    //default Delimiter between Module & Method
    'delimit' => '.',
    //default bootstrap file
    'bootstrap' => 'bootstrap.php',
    //list of modules
    'modules' => array()
);