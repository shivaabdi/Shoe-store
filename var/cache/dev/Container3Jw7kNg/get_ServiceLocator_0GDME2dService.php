<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.0GDME2d' shared service.

return $this->privates['.service_locator.0GDME2d'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('categoriesRepository' => function (): \App\Repository\CategoriesRepository {
    return ($this->privates['App\Repository\CategoriesRepository'] ?? $this->load('getCategoriesRepositoryService.php'));
}));
