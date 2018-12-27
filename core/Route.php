<?php


class Route implements IRouter
{

    private static $routes = [
        'GET'   => [],
        'POST'  => []
    ];


    public static function get($uri, $controller)
    {

    }

    public static function post($uri, $controller)
    {

    }

    public static function direct($uri, $requestType)
    {

    }

    public static function load($file)
    {
        // TODO: Implement load() method.
    }
}