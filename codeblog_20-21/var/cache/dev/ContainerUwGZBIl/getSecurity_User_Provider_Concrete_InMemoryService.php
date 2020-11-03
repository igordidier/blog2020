<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.user.provider.concrete.in_memory' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserProviderInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\InMemoryUserProvider.php';

return $this->privates['security.user.provider.concrete.in_memory'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider(['user' => ['password' => 'user', 'roles' => [0 => 'ROLE_USER']], 'admin' => ['password' => 'admin', 'roles' => [0 => 'ROLE_ADMIN']]]);