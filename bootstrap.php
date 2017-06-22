<?php

$config = require "config_local.php";

define('MY_TOKEN', $config['token']);
define('URL', $config['url']);

require 'vendor/autoload.php';