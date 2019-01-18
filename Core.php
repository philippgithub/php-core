<?php
if (!class_exists("Core")) {
    class Core
    {
        const VERSION = "1.0";
        private static $core;

        /**
         * Setter
         * @param string $name
         * @param mixed $value
         */
        public static function set($name, $value)
        {
            self::$core[$name] = $value;
        }

        /**
         * Alias for set
         */
        public static function write($name, $value)
        {
            self::$core[$name] = $value;
        }

        /**
         * Getter
         * @param string $name
         * @return mixed
         */
        public static function get($name)
        {
            return self::$core[$name];
        }

        /**
         * Alias for get
         */
        public static function read($name)
        {
            return self::$core[$name];
        }
    }
}
