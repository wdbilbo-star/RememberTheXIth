<?php

    require __DIR__.'/../Core/functions.php';

    $uri = parse_url($_SERVER['REQUEST_URI'])['path']; ;

  include '../routes.php';

  /*$config = require('../config.php');*/



