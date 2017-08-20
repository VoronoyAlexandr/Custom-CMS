<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

namespace Engine\Service\Database;


use Engine\Service\AbstractProvider;
use Engine\Core\Database\Connection;

/**
 * Class Provider
 * @package Engine\Service\Database
 */
class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'db';

    /**
     * @return mixed
     */
    public function init()
    {
       $db = new Connection();
       $this->di->set($this->serviceName, $db);
    }
}