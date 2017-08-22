<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

namespace Engine;

use Engine\Core\Router\Router;
use Engine\DI\DI;
use Engine\Helper\Common;

class Cms
{
    /**
     * @var DI\
     */
    private $di;
    /**
     * @var Router
     */
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
    public function run()
    {
        //  print_r($this->di);
        $this->router->add('home','/','HomeController::index');
        $this->router->add('product','/user/12','ProductController::index');

        $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

        return 'Hello';


    }

}