<?php

namespace Core\Request;

use Core\Util\ArrayUtil;

abstract class Request
{
	public static function exist($key)
	{
		return ArrayUtil::exist($_POST, $key);
	}

	public static function get($key, $default = null)
	{
		return ArrayUtil::get($_POST, $key, $default);
	}
}