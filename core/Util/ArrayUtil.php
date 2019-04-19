<?php

namespace Core\Util;

abstract class ArrayUtil
{
	public static function exist(array $array, $key)
	{
		return isset($array[$key]);
	}

	public static function get(array $array, $key, $default = null)
	{
		return $array[$key] ?? $default;
	}
}