<?php
if(!class_exists("Core")){
	class Core{
		const VERSION = "1.0";
		static $core;

		public static function get($name){
			return self::$core[$name];
		}

		public static function read($name){
			return self::$core[$name];
		}

		public static function set($name, $value){
			self::$core[$name] = $value;
		}

		public static function write($name, $value){
			self::$core[$name] = $value;
		}
	}
}
