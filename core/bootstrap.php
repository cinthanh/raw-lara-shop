<?php

require_once 'configs.php';
require_once 'core/IRouter.php';
require_once 'core/Route.php';
require_once 'core/Request.php';

echo (new Request)->uri();
