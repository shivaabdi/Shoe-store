<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.iuuVGtK' shared service.

return $this->privates['.service_locator.iuuVGtK'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('user' => function (): \App\Entity\User {
    return ($this->privates['.errored..service_locator.iuuVGtK.App\Entity\User'] ?? $this->load('getUser2Service.php'));
}));