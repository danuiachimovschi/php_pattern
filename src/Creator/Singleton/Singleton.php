<?php

declare(strict_types=1);

namespace App\Creator\Singleton;

/* Singleton pattern is anti-pattern becouse is creates gloabal variables that can be accessed 
 * In same time can be used in connection to database
 * read it https://treewebsolutions.com/articles/the-singleton-pattern-in-php-65
*/
class Singleton
{
    private static $instance;

    /* 
     * We need to make magic method __construct  private
     * becouse user must create this object only with method instance
    */
    private function __construct(){}

    /**
     * With this method we can create class Singleton only
     * if class has no instance 
    */
    public static function instance()
    {
        if(is_null(self::$instance)){
            self::$instance = new static;
        }

        return self::$instance;
    }
}