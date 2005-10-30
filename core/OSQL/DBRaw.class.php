<?php
/***************************************************************************
 *   Copyright (C) 2005 by Konstantin V. Arkhipov                          *
 *   voxus@gentoo.org                                                      *
 *                                                                         *
 *   This program is free software; you can redistribute it and/or modify  *
 *   it under the terms of the GNU General Public License as published by  *
 *   the Free Software Foundation; either version 2 of the License, or     *
 *   (at your option) any later version.                                   *
 *                                                                         *
 ***************************************************************************/
/* $Id$ */

	final class DBRaw implements LogicalObject
	{
		private $string = null;
		
		public function __construct($rawString)
		{
			if (!defined('__I_HATE_MY_KARMA__'))
				throw new UnsupportedMethodException(
					'do not use it. please.'
				);
			
			$this->string = $rawString;
		}
		
		public function toString(Dialect $dialect)
		{
			return $this->string;
		}
		
		public function toBoolean(Form $form)
		{
			throw new UnsupportedMethodException();
		}
	}
?>