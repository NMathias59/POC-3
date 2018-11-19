<?php

namespace Core\Request;

use Core\Util\ArrayUtil;

abstract class Query
{
	public static function exist($key)
	{
		return ArrayUtil::exist($_GET, $key);
	}

	public static function get($key, $default = null)
	{
		return ArrayUtil::get($_GET, $key, $default);
	}
}