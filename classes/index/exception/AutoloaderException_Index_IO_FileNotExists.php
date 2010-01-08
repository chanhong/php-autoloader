<?php
#########################################################################
# Copyright (C) 2010  Markus Malkusch <markus@malkusch.de>              #
#                                                                       #
# This program is free software: you can redistribute it and/or modify  #
# it under the terms of the GNU General Public License as published by  #
# the Free Software Foundation, either version 3 of the License, or     #
# (at your option) any later version.                                   #
#                                                                       #
# This program is distributed in the hope that it will be useful,       #
# but WITHOUT ANY WARRANTY; without even the implied warranty of        #
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the         #
# GNU General Public License for more details.                          #
#                                                                       #
# You should have received a copy of the GNU General Public License     #
# along with this program.  If not, see <http://www.gnu.org/licenses/>. #
#########################################################################


InternalAutoloader::getInstance()->registerClass(
	'AutoloaderException_Index',
	dirname(__FILE__).'/AutoloaderException_Index_IO.php'
);


/**
 * File does not exist.
 */
class AutoloaderException_Index_IO_FileNotExists extends AutoloaderException_Index_IO {
	
	
	/**
	 * @param String $file
	 */
	public function __construct($file) {
		parent::__construct("The file '$file' does not exist.");
	}
    
    
}