<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ZNaWGsP' shared service.

return $this->privates['.service_locator.ZNaWGsP'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('resimler' => function (): \App\Entity\Resimler {
    return ($this->privates['.errored..service_locator.ZNaWGsP.App\Entity\Resimler'] ?? $this->load('getResimlerService.php'));
}));