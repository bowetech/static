<?php

namespace Kernel\Support\Facades;

use  Kernel\Support\Facades\Facade;

/**
 *  Get the registered name of the component 
 * 
 * @return  string returns the name of the class
 */
class Route extends Facade
{
	protected static function getFacadeAccessor()
	{
		return  app()->resolve('router');
	}
}