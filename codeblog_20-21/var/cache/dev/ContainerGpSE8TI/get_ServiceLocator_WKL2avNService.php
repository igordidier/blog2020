<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.WKL2avN' shared service.

return $this->privates['.service_locator.WKL2avN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'article' => ['privates', '.errored..service_locator.WKL2avN.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.WKL2avN": it references class "App\\Entity\\Article" but no such service exists.'],
], [
    'article' => 'App\\Entity\\Article',
]);