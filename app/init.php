<?php

// Autoload Core
spl_autoload_register(function($class){
    require_once "Core/{$class}.php";
});

// Global Path/Base
$GLOBALS['path'] = '/mini-framework/public';