<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\Admin\\CategoriesController::delete' => function () {
    return ($this->privates['.service_locator.p2SiWGF'] ?? $this->load('get_ServiceLocator_P2SiWGFService.php'));
}, 'App\\Controller\\Admin\\CategoriesController::edit' => function () {
    return ($this->privates['.service_locator.Cx64uWa'] ?? $this->load('get_ServiceLocator_Cx64uWaService.php'));
}, 'App\\Controller\\Admin\\CategoriesController::index' => function () {
    return ($this->privates['.service_locator.0GDME2d'] ?? $this->load('get_ServiceLocator_0GDME2dService.php'));
}, 'App\\Controller\\Admin\\CategoriesController::new' => function () {
    return ($this->privates['.service_locator.0GDME2d'] ?? $this->load('get_ServiceLocator_0GDME2dService.php'));
}, 'App\\Controller\\Admin\\CategoriesController::show' => function () {
    return ($this->privates['.service_locator.Cx64uWa'] ?? $this->load('get_ServiceLocator_Cx64uWaService.php'));
}, 'App\\Controller\\Admin\\MessagesController::delete' => function () {
    return ($this->privates['.service_locator.51IVYBf'] ?? $this->load('get_ServiceLocator_51IVYBfService.php'));
}, 'App\\Controller\\Admin\\MessagesController::index' => function () {
    return ($this->privates['.service_locator.K3L83Kj'] ?? $this->load('get_ServiceLocator_K3L83KjService.php'));
}, 'App\\Controller\\Admin\\MessagesController::show' => function () {
    return ($this->privates['.service_locator.51IVYBf'] ?? $this->load('get_ServiceLocator_51IVYBfService.php'));
}, 'App\\Controller\\Admin\\ProductController::delete' => function () {
    return ($this->privates['.service_locator.4nPGKhY'] ?? $this->load('get_ServiceLocator_4nPGKhYService.php'));
}, 'App\\Controller\\Admin\\ProductController::edit' => function () {
    return ($this->privates['.service_locator.yNdk.hI'] ?? $this->load('get_ServiceLocator_YNdk_HIService.php'));
}, 'App\\Controller\\Admin\\ProductController::gallery' => function () {
    return ($this->privates['.service_locator.1aOc3L9'] ?? $this->load('get_ServiceLocator_1aOc3L9Service.php'));
}, 'App\\Controller\\Admin\\ProductController::index' => function () {
    return ($this->privates['.service_locator.h88HwOM'] ?? $this->load('get_ServiceLocator_H88HwOMService.php'));
}, 'App\\Controller\\Admin\\ProductController::new' => function () {
    return ($this->privates['.service_locator.0GDME2d'] ?? $this->load('get_ServiceLocator_0GDME2dService.php'));
}, 'App\\Controller\\Admin\\ProductController::show' => function () {
    return ($this->privates['.service_locator.QJs22mL'] ?? $this->load('get_ServiceLocator_QJs22mLService.php'));
}, 'App\\Controller\\Admin\\ResimlerController::delete' => function () {
    return ($this->privates['.service_locator.ZNaWGsP'] ?? $this->load('get_ServiceLocator_ZNaWGsPService.php'));
}, 'App\\Controller\\Admin\\ResimlerController::edit' => function () {
    return ($this->privates['.service_locator.ZNaWGsP'] ?? $this->load('get_ServiceLocator_ZNaWGsPService.php'));
}, 'App\\Controller\\Admin\\ResimlerController::index' => function () {
    return ($this->privates['.service_locator.lpzdpFs'] ?? $this->load('get_ServiceLocator_LpzdpFsService.php'));
}, 'App\\Controller\\Admin\\ResimlerController::new' => function () {
    return ($this->privates['.service_locator.4ezSskK'] ?? $this->load('get_ServiceLocator_4ezSskKService.php'));
}, 'App\\Controller\\Admin\\ResimlerController::show' => function () {
    return ($this->privates['.service_locator.ZNaWGsP'] ?? $this->load('get_ServiceLocator_ZNaWGsPService.php'));
}, 'App\\Controller\\Admin\\SettingController::index' => function () {
    return ($this->privates['.service_locator.oAcwZck'] ?? $this->load('get_ServiceLocator_OAcwZckService.php'));
}, 'App\\Controller\\Admin\\UserController::delete' => function () {
    return ($this->privates['.service_locator.iuuVGtK'] ?? $this->load('get_ServiceLocator_IuuVGtKService.php'));
}, 'App\\Controller\\Admin\\UserController::edit' => function () {
    return ($this->privates['.service_locator.iuuVGtK'] ?? $this->load('get_ServiceLocator_IuuVGtKService.php'));
}, 'App\\Controller\\Admin\\UserController::index' => function () {
    return ($this->privates['.service_locator.pDN53fn'] ?? $this->load('get_ServiceLocator_PDN53fnService.php'));
}, 'App\\Controller\\Admin\\UserController::show' => function () {
    return ($this->privates['.service_locator.iuuVGtK'] ?? $this->load('get_ServiceLocator_IuuVGtKService.php'));
}, 'App\\Controller\\Admin\\adminController::ordershow' => function () {
    return ($this->privates['.service_locator.WRDb4EJ'] ?? $this->load('get_ServiceLocator_WRDb4EJService.php'));
}, 'App\\Controller\\Admin\\adminController::ordersindex' => function () {
    return ($this->privates['.service_locator.p3jGxp3'] ?? $this->load('get_ServiceLocator_P3jGxp3Service.php'));
}, 'App\\Controller\\Home\\HomeController::aboutus' => function () {
    return ($this->privates['.service_locator.O_LYevw'] ?? $this->load('get_ServiceLocator_OLYevwService.php'));
}, 'App\\Controller\\Home\\HomeController::accountEdit' => function () {
    return ($this->privates['.service_locator.zBPsdEs'] ?? $this->load('get_ServiceLocator_ZBPsdEsService.php'));
}, 'App\\Controller\\Home\\HomeController::contact' => function () {
    return ($this->privates['.service_locator.O_LYevw'] ?? $this->load('get_ServiceLocator_OLYevwService.php'));
}, 'App\\Controller\\Home\\HomeController::index' => function () {
    return ($this->privates['.service_locator.aGOAil1'] ?? $this->load('get_ServiceLocator_AGOAil1Service.php'));
}, 'App\\Controller\\Home\\HomeController::myAccount' => function () {
    return ($this->privates['.service_locator.9AMeiiU'] ?? $this->load('get_ServiceLocator_9AMeiiUService.php'));
}, 'App\\Controller\\Home\\HomeController::productdetail' => function () {
    return ($this->privates['.service_locator.aGOAil1'] ?? $this->load('get_ServiceLocator_AGOAil1Service.php'));
}, 'App\\Controller\\Home\\HomeController::products' => function () {
    return ($this->privates['.service_locator.2K3tg4C'] ?? $this->load('get_ServiceLocator_2K3tg4CService.php'));
}, 'App\\Controller\\Home\\HomeController::userSignUp' => function () {
    return ($this->privates['.service_locator.Hb..EUt'] ?? $this->load('get_ServiceLocator_Hb__EUtService.php'));
}, 'App\\Controller\\Home\\ShopcartController::delete' => function () {
    return ($this->privates['.service_locator.9okS_qG'] ?? $this->load('get_ServiceLocator_9okSQGService.php'));
}, 'App\\Controller\\Home\\ShopcartController::index' => function () {
    return ($this->privates['.service_locator.ZGEWAMe'] ?? $this->load('get_ServiceLocator_ZGEWAMeService.php'));
}, 'App\\Controller\\Home\\ShopcartController::show' => function () {
    return ($this->privates['.service_locator.9okS_qG'] ?? $this->load('get_ServiceLocator_9okSQGService.php'));
}, 'App\\Controller\\OrderDetailController::delete' => function () {
    return ($this->privates['.service_locator.pTQmj42'] ?? $this->load('get_ServiceLocator_PTQmj42Service.php'));
}, 'App\\Controller\\OrderDetailController::edit' => function () {
    return ($this->privates['.service_locator.pTQmj42'] ?? $this->load('get_ServiceLocator_PTQmj42Service.php'));
}, 'App\\Controller\\OrderDetailController::index' => function () {
    return ($this->privates['.service_locator.vxPWigI'] ?? $this->load('get_ServiceLocator_VxPWigIService.php'));
}, 'App\\Controller\\OrderDetailController::show' => function () {
    return ($this->privates['.service_locator.pTQmj42'] ?? $this->load('get_ServiceLocator_PTQmj42Service.php'));
}, 'App\\Controller\\OrdersController::delete' => function () {
    return ($this->privates['.service_locator.RELFidE'] ?? $this->load('get_ServiceLocator_RELFidEService.php'));
}, 'App\\Controller\\OrdersController::edit' => function () {
    return ($this->privates['.service_locator.RELFidE'] ?? $this->load('get_ServiceLocator_RELFidEService.php'));
}, 'App\\Controller\\OrdersController::index' => function () {
    return ($this->privates['.service_locator.Y21gY5W'] ?? $this->load('get_ServiceLocator_Y21gY5WService.php'));
}, 'App\\Controller\\OrdersController::new' => function () {
    return ($this->privates['.service_locator.ZGEWAMe'] ?? $this->load('get_ServiceLocator_ZGEWAMeService.php'));
}, 'App\\Controller\\OrdersController::show' => function () {
    return ($this->privates['.service_locator.rMk4582'] ?? $this->load('get_ServiceLocator_RMk4582Service.php'));
}, 'App\\Controller\\SecurityController::login' => function () {
    return ($this->privates['.service_locator.lQ2sWSK'] ?? $this->load('get_ServiceLocator_LQ2sWSKService.php'));
}, 'App\\Controller\\Admin\\CategoriesController:delete' => function () {
    return ($this->privates['.service_locator.p2SiWGF'] ?? $this->load('get_ServiceLocator_P2SiWGFService.php'));
}, 'App\\Controller\\Admin\\CategoriesController:edit' => function () {
    return ($this->privates['.service_locator.Cx64uWa'] ?? $this->load('get_ServiceLocator_Cx64uWaService.php'));
}, 'App\\Controller\\Admin\\CategoriesController:index' => function () {
    return ($this->privates['.service_locator.0GDME2d'] ?? $this->load('get_ServiceLocator_0GDME2dService.php'));
}, 'App\\Controller\\Admin\\CategoriesController:new' => function () {
    return ($this->privates['.service_locator.0GDME2d'] ?? $this->load('get_ServiceLocator_0GDME2dService.php'));
}, 'App\\Controller\\Admin\\CategoriesController:show' => function () {
    return ($this->privates['.service_locator.Cx64uWa'] ?? $this->load('get_ServiceLocator_Cx64uWaService.php'));
}, 'App\\Controller\\Admin\\MessagesController:delete' => function () {
    return ($this->privates['.service_locator.51IVYBf'] ?? $this->load('get_ServiceLocator_51IVYBfService.php'));
}, 'App\\Controller\\Admin\\MessagesController:index' => function () {
    return ($this->privates['.service_locator.K3L83Kj'] ?? $this->load('get_ServiceLocator_K3L83KjService.php'));
}, 'App\\Controller\\Admin\\MessagesController:show' => function () {
    return ($this->privates['.service_locator.51IVYBf'] ?? $this->load('get_ServiceLocator_51IVYBfService.php'));
}, 'App\\Controller\\Admin\\ProductController:delete' => function () {
    return ($this->privates['.service_locator.4nPGKhY'] ?? $this->load('get_ServiceLocator_4nPGKhYService.php'));
}, 'App\\Controller\\Admin\\ProductController:edit' => function () {
    return ($this->privates['.service_locator.yNdk.hI'] ?? $this->load('get_ServiceLocator_YNdk_HIService.php'));
}, 'App\\Controller\\Admin\\ProductController:gallery' => function () {
    return ($this->privates['.service_locator.1aOc3L9'] ?? $this->load('get_ServiceLocator_1aOc3L9Service.php'));
}, 'App\\Controller\\Admin\\ProductController:index' => function () {
    return ($this->privates['.service_locator.h88HwOM'] ?? $this->load('get_ServiceLocator_H88HwOMService.php'));
}, 'App\\Controller\\Admin\\ProductController:new' => function () {
    return ($this->privates['.service_locator.0GDME2d'] ?? $this->load('get_ServiceLocator_0GDME2dService.php'));
}, 'App\\Controller\\Admin\\ProductController:show' => function () {
    return ($this->privates['.service_locator.QJs22mL'] ?? $this->load('get_ServiceLocator_QJs22mLService.php'));
}, 'App\\Controller\\Admin\\ResimlerController:delete' => function () {
    return ($this->privates['.service_locator.ZNaWGsP'] ?? $this->load('get_ServiceLocator_ZNaWGsPService.php'));
}, 'App\\Controller\\Admin\\ResimlerController:edit' => function () {
    return ($this->privates['.service_locator.ZNaWGsP'] ?? $this->load('get_ServiceLocator_ZNaWGsPService.php'));
}, 'App\\Controller\\Admin\\ResimlerController:index' => function () {
    return ($this->privates['.service_locator.lpzdpFs'] ?? $this->load('get_ServiceLocator_LpzdpFsService.php'));
}, 'App\\Controller\\Admin\\ResimlerController:new' => function () {
    return ($this->privates['.service_locator.4ezSskK'] ?? $this->load('get_ServiceLocator_4ezSskKService.php'));
}, 'App\\Controller\\Admin\\ResimlerController:show' => function () {
    return ($this->privates['.service_locator.ZNaWGsP'] ?? $this->load('get_ServiceLocator_ZNaWGsPService.php'));
}, 'App\\Controller\\Admin\\SettingController:index' => function () {
    return ($this->privates['.service_locator.oAcwZck'] ?? $this->load('get_ServiceLocator_OAcwZckService.php'));
}, 'App\\Controller\\Admin\\UserController:delete' => function () {
    return ($this->privates['.service_locator.iuuVGtK'] ?? $this->load('get_ServiceLocator_IuuVGtKService.php'));
}, 'App\\Controller\\Admin\\UserController:edit' => function () {
    return ($this->privates['.service_locator.iuuVGtK'] ?? $this->load('get_ServiceLocator_IuuVGtKService.php'));
}, 'App\\Controller\\Admin\\UserController:index' => function () {
    return ($this->privates['.service_locator.pDN53fn'] ?? $this->load('get_ServiceLocator_PDN53fnService.php'));
}, 'App\\Controller\\Admin\\UserController:show' => function () {
    return ($this->privates['.service_locator.iuuVGtK'] ?? $this->load('get_ServiceLocator_IuuVGtKService.php'));
}, 'App\\Controller\\Admin\\adminController:ordershow' => function () {
    return ($this->privates['.service_locator.WRDb4EJ'] ?? $this->load('get_ServiceLocator_WRDb4EJService.php'));
}, 'App\\Controller\\Admin\\adminController:ordersindex' => function () {
    return ($this->privates['.service_locator.p3jGxp3'] ?? $this->load('get_ServiceLocator_P3jGxp3Service.php'));
}, 'App\\Controller\\Home\\HomeController:aboutus' => function () {
    return ($this->privates['.service_locator.O_LYevw'] ?? $this->load('get_ServiceLocator_OLYevwService.php'));
}, 'App\\Controller\\Home\\HomeController:accountEdit' => function () {
    return ($this->privates['.service_locator.zBPsdEs'] ?? $this->load('get_ServiceLocator_ZBPsdEsService.php'));
}, 'App\\Controller\\Home\\HomeController:contact' => function () {
    return ($this->privates['.service_locator.O_LYevw'] ?? $this->load('get_ServiceLocator_OLYevwService.php'));
}, 'App\\Controller\\Home\\HomeController:index' => function () {
    return ($this->privates['.service_locator.aGOAil1'] ?? $this->load('get_ServiceLocator_AGOAil1Service.php'));
}, 'App\\Controller\\Home\\HomeController:myAccount' => function () {
    return ($this->privates['.service_locator.9AMeiiU'] ?? $this->load('get_ServiceLocator_9AMeiiUService.php'));
}, 'App\\Controller\\Home\\HomeController:productdetail' => function () {
    return ($this->privates['.service_locator.aGOAil1'] ?? $this->load('get_ServiceLocator_AGOAil1Service.php'));
}, 'App\\Controller\\Home\\HomeController:products' => function () {
    return ($this->privates['.service_locator.2K3tg4C'] ?? $this->load('get_ServiceLocator_2K3tg4CService.php'));
}, 'App\\Controller\\Home\\HomeController:userSignUp' => function () {
    return ($this->privates['.service_locator.Hb..EUt'] ?? $this->load('get_ServiceLocator_Hb__EUtService.php'));
}, 'App\\Controller\\Home\\ShopcartController:delete' => function () {
    return ($this->privates['.service_locator.9okS_qG'] ?? $this->load('get_ServiceLocator_9okSQGService.php'));
}, 'App\\Controller\\Home\\ShopcartController:index' => function () {
    return ($this->privates['.service_locator.ZGEWAMe'] ?? $this->load('get_ServiceLocator_ZGEWAMeService.php'));
}, 'App\\Controller\\Home\\ShopcartController:show' => function () {
    return ($this->privates['.service_locator.9okS_qG'] ?? $this->load('get_ServiceLocator_9okSQGService.php'));
}, 'App\\Controller\\OrderDetailController:delete' => function () {
    return ($this->privates['.service_locator.pTQmj42'] ?? $this->load('get_ServiceLocator_PTQmj42Service.php'));
}, 'App\\Controller\\OrderDetailController:edit' => function () {
    return ($this->privates['.service_locator.pTQmj42'] ?? $this->load('get_ServiceLocator_PTQmj42Service.php'));
}, 'App\\Controller\\OrderDetailController:index' => function () {
    return ($this->privates['.service_locator.vxPWigI'] ?? $this->load('get_ServiceLocator_VxPWigIService.php'));
}, 'App\\Controller\\OrderDetailController:show' => function () {
    return ($this->privates['.service_locator.pTQmj42'] ?? $this->load('get_ServiceLocator_PTQmj42Service.php'));
}, 'App\\Controller\\OrdersController:delete' => function () {
    return ($this->privates['.service_locator.RELFidE'] ?? $this->load('get_ServiceLocator_RELFidEService.php'));
}, 'App\\Controller\\OrdersController:edit' => function () {
    return ($this->privates['.service_locator.RELFidE'] ?? $this->load('get_ServiceLocator_RELFidEService.php'));
}, 'App\\Controller\\OrdersController:index' => function () {
    return ($this->privates['.service_locator.Y21gY5W'] ?? $this->load('get_ServiceLocator_Y21gY5WService.php'));
}, 'App\\Controller\\OrdersController:new' => function () {
    return ($this->privates['.service_locator.ZGEWAMe'] ?? $this->load('get_ServiceLocator_ZGEWAMeService.php'));
}, 'App\\Controller\\OrdersController:show' => function () {
    return ($this->privates['.service_locator.rMk4582'] ?? $this->load('get_ServiceLocator_RMk4582Service.php'));
}, 'App\\Controller\\SecurityController:login' => function () {
    return ($this->privates['.service_locator.lQ2sWSK'] ?? $this->load('get_ServiceLocator_LQ2sWSKService.php'));
}))), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
