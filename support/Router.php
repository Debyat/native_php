<?php

namespace Support;

class Router {
    
    public $routes = [];

    /**
     * navigate route
     */
    function route(string $path, callable $callback) 
    {
        global $routes;
        $routes[$path] = $callback;
    }

    /**
     * accept run application
     */
    function run() {
        global $routes;
        $uri = $_SERVER['REQUEST_URI'];
        $found = false;
        foreach ($routes as $path => $callback) {
            if ($path !== $uri) continue;

            $found = true;
            $callback();
        }

        if (!$found) {
            $notFoundCallback = $routes['/404'];
            $notFoundCallback();
        }
    }
}

