<?php

class Input
{
	public static function exists($type = "POST")
	{
		switch ($type) {
			case "POST":
				return (!empty($_POST)) ? true : false;

			case "GET":
				return (!empty($_GET)) ? true : false;


			default:
				return false;
		}
	}

	public static function get($item)
	{
		if (isset($_POST[$item])) {
			return $_POST[$item];
		} else if (isset($GET[$item])) {
			return $_GET[$item];
		}

		return "";
	}
}
