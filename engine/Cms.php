<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

namespace Engine;

use Engine\DI\DI;

class Cms
{
    /**
     * @var DI\
     */
    private $di;
    public $router;

    /**
     * CMS constructor.
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    /**
     *
     * @return string
     */
    public function run(){


     //  print_r($this->di);
        $this->router->add('home','/','HomeController::index');
        $this->router->add('product','/product/{id}','ProductController::index');
        print_r($this->di);
        return 'Hello';


    }

}