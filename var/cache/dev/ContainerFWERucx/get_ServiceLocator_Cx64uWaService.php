<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Cx64uWa' shared service.

return $this->privates['.service_locator.Cx64uWa'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('categoriesRepository' => function (): \App\Repository\CategoriesRepository {
    return ($this->privates['App\Repository\CategoriesRepository'] ?? $this->load('getCategoriesRepositoryService.php'));
}, 'category' => function (): \App\Entity\Categories {
    return ($this->privates['.errored..service_locator.Cx64uWa.App\Entity\Categories'] ?? $this->load('getCategoriesService.php'));
}));
