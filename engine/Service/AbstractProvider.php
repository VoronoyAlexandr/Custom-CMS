<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

namespace Engine\Service;


use Engine\DI\DI;

abstract class AbstractProvider
{
    /**
     * @var DI
     */
    protected $di;

    /**
     * AbstractProvider constructor.
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    /**
     * @return mixed
     */
    abstract function init();
}