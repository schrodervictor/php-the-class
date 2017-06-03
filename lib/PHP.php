<?php

class PHP
{
    public static function __callStatic($method, $arguments)
    {
        return call_user_func_array($method, $arguments);
    }
}
