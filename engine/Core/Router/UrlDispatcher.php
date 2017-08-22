<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

namespace Engine\Core\Router;


/**
 * Class UrlDispatcher
 * @package Engine\Core\Router
 */
class UrlDispatcher
{
    /**
     * @var array
     */
    private $method = [
        'GET',
        'POST'
    ];
    /**
     * @var array
     */
    private $routes = [
        'GET'  => [],
        'POST' => []
    ];

    /**
     * @var array
     */
    private $patterns = [
        'int' => '[0-9]+',
        'str' => '[a-zA-Z\.\-_%]+',
        'any' => '[a-zA-Z0-9\.\-_%]+'
    ];

    /**
     * @param $key
     * @param $pattern
     */
    public function addPattern($key, $pattern)
    {
        $this->patterns[$key] = $pattern;
    }

    /**
     * @param $method
     * @return array|mixed
     */
    public function routes($method)
    {
        return isset($this->routes[$method]) ? $this->routes[$method] : [];
    }

    /**
     * @param $method
     * @param $uri
     * @return DispatchedRoute
     */
    public function dispatch($method, $uri)
    {
        $routes = $this->routes(strtoupper($method));
        if (array_key_exists($uri, $routes)) {

            return new DispatchedRoute($routes[$uri]);
        }
    }
}