<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.yNdk.hI' shared service.

return $this->privates['.service_locator.yNdk.hI'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('categoriesRepository' => function (): \App\Repository\CategoriesRepository {
    return ($this->privates['App\Repository\CategoriesRepository'] ?? $this->load('getCategoriesRepositoryService.php'));
}, 'product' => function (): \App\Entity\Product {
    return ($this->privates['.errored..service_locator.yNdk.hI.App\Entity\Product'] ?? $this->load('getProduct4Service.php'));
}));
