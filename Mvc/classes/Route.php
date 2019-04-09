<?php

class Route {
	public static $vadRoutes = array();

	public static function set($routes, $function) {
		self::$vadRoutes[] = $routes;

		if ($_GET['url'] == $route) {
		   $function->__invoke();
		}
	}
}