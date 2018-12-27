<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 12/27/18
 * Time: 10:47 AM
 */

class Request
{

    public function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/'
        );
    }

    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}