<?php
ob_start();
date_default_timezone_set("Asia/Tashkent");

session_start();


define("WWW_ROOT", "http://localhost/instagram/");

require_once "functions.php";

spl_autoload_register(function ($classname) {
	require_once "classes/" . $classname . ".php";
});
