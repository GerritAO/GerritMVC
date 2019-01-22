<?php  
    //load config
    require_once 'config/config.php';
    //load libraries
    // require_once 'libraries/Core.php';
    // require_once 'libraries/Controller.php';
    // require_once 'libraries/Database.php';

    //autoload corelibabries
    spl_autoload_register(Function($classname){
        require_once 'libraries/' .$classname . '.php';
    });

    