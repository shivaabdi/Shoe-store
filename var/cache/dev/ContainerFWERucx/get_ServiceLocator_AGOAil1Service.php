<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.aGOAil1' shared service.

return $this->privates['.service_locator.aGOAil1'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('categoriesRepository' => function (): \App\Repository\CategoriesRepository {
    return ($this->privates['App\Repository\CategoriesRepository'] ?? $this->load('getCategoriesRepositoryService.php'));
}, 'productRepository' => function (): \App\Repository\ProductRepository {
    return ($this->privates['App\Repository\ProductRepository'] ?? $this->load('getProductRepositoryService.php'));
}, 'resimlerRepository' => function (): \App\Repository\ResimlerRepository {
    return ($this->privates['App\Repository\ResimlerRepository'] ?? $this->load('getResimlerRepositoryService.php'));
}, 'shopcartRepository' => function (): \App\Repository\ShopcartRepository {
    return ($this->privates['App\Repository\ShopcartRepository'] ?? $this->load('getShopcartRepositoryService.php'));
}));
