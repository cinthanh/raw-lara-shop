<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 12/27/18
 * Time: 11:22 AM
 */

interface IRouter
{

    public static function get($uri, $controller);
    public static function post($uri, $controller);
    public static function direct($uri, $requestType);
    public static function load($file);


}