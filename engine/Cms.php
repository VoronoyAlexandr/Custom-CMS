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
     * @var
     */
    private $di;

    /**
     * CMS constructor.
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    /**
     *
     * @return string
     */
    public function run(){

        return 'Hello';

    }

}