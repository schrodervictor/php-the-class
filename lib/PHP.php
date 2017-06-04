<?php

class PHP
{
    public static function preg_match(
        $pattern, $subject, &$matches = null, $flags = 0, $offset = 0
    ) {
        return preg_match($pattern, $subject, $matches, $flags, $offset);
    }


    public static function __callStatic($method, $arguments)
    {
        return call_user_func_array($method, $arguments);
    }
}
