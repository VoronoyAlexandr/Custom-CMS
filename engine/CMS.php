<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

namespace Engine;

use Engine\DI\DI;

class CMS
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
     * Run CMS
     */
    public function run(){
    $db = $this->di->get('test');

    }

}