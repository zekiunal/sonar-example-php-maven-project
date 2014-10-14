<?php
namespace RouterTest;
error_reporting(E_ALL);
chdir(__DIR__);

class Bootstrap{

    /**
     * init and configuration
     */
    public static function init(){
        require_once '..\application\library\SplClassLoader.php';
    }
}

Bootstrap::init();