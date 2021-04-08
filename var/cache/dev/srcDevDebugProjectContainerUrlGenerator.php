<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'kategoriler_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\CategoriesController::index'), array(), array(array('text', '/admin/kategoriler/')), array(), array()),
        'kategori_ekle' => array(array(), array('_controller' => 'App\\Controller\\Admin\\CategoriesController::new'), array(), array(array('text', '/admin/kategoriler/yeni')), array(), array()),
        'kategori_goster' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\CategoriesController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/kategoriler/goster')), array(), array()),
        'kategori_guncelle' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\CategoriesController::edit'), array(), array(array('text', '/guncelle'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/kategoriler')), array(), array()),
        'kategori_sil' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\CategoriesController::delete'), array(), array(array('text', '/sil'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/kategoriler')), array(), array()),
        'messages_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\MessagesController::index'), array(), array(array('text', '/admin/messages/')), array(), array()),
        'messages_show' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\MessagesController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/messages')), array(), array()),
        'messages_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\MessagesController::delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/messages')), array(), array()),
        'product_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\ProductController::index'), array(), array(array('text', '/admin/product/')), array(), array()),
        'product_new' => array(array(), array('_controller' => 'App\\Controller\\Admin\\ProductController::new'), array(), array(array('text', '/admin/product/new')), array(), array()),
        'product_show' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\ProductController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/product')), array(), array()),
        'product_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\ProductController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/product')), array(), array()),
        'product_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\ProductController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/product')), array(), array()),
        'product_gallery' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\ProductController::gallery'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/product/gallery')), array(), array()),
        'resimler_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\ResimlerController::index'), array(), array(array('text', '/admin/urunresimleri/')), array(), array()),
        'resimler_new' => array(array(), array('_controller' => 'App\\Controller\\Admin\\ResimlerController::new'), array(), array(array('text', '/admin/urunresimleri/new')), array(), array()),
        'resimler_show' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\ResimlerController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/urunresimleri')), array(), array()),
        'resimler_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\ResimlerController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/urunresimleri')), array(), array()),
        'resimler_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\ResimlerController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/urunresimleri')), array(), array()),
        'setting_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\SettingController::index'), array(), array(array('text', '/admin/setting/')), array(), array()),
        'user_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\UserController::index'), array(), array(array('text', '/admin/uyeler/')), array(), array()),
        'user_show' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\UserController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/uyeler')), array(), array()),
        'user_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\UserController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/uyeler')), array(), array()),
        'user_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\UserController::delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/uyeler')), array(), array()),
        'admin' => array(array(), array('_controller' => 'App\\Controller\\Admin\\adminController::index'), array(), array(array('text', '/admin')), array(), array()),
        'admin_orders' => array(array('slug'), array('_controller' => 'App\\Controller\\Admin\\adminController::ordersindex'), array(), array(array('variable', '/', '[^/]++', 'slug'), array('text', '/admin/orders')), array(), array()),
        'admin_order_show' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\adminController::ordershow'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/orders/show')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\Home\\HomeController::index'), array(), array(array('text', '/')), array(), array()),
        'home_aboutus' => array(array(), array('_controller' => 'App\\Controller\\Home\\HomeController::aboutus'), array(), array(array('text', '/home/aboutus')), array(), array()),
        'home_contact' => array(array(), array('_controller' => 'App\\Controller\\Home\\HomeController::contact'), array(), array(array('text', '/home/contact')), array(), array()),
        'home_products' => array(array('id'), array('_controller' => 'App\\Controller\\Home\\HomeController::products'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/home/products')), array(), array()),
        'product_detail' => array(array('id'), array('_controller' => 'App\\Controller\\Home\\HomeController::productdetail'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/home/product')), array(), array()),
        'new_user' => array(array(), array('_controller' => 'App\\Controller\\Home\\HomeController::userSignUp'), array(), array(array('text', '/home/newuser/')), array(), array()),
        'home_account' => array(array('id'), array('_controller' => 'App\\Controller\\Home\\HomeController::myAccount'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/home/myaccount')), array(), array()),
        'account_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Home\\HomeController::accountEdit'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/home/myaccount/edit')), array(), array()),
        'shopcart_index' => array(array(), array('_controller' => 'App\\Controller\\Home\\ShopcartController::index'), array(), array(array('text', '/home/shopcart/')), array(), array()),
        'shopcart_show' => array(array('id'), array('_controller' => 'App\\Controller\\Home\\ShopcartController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/home/shopcart')), array(), array()),
        'shopcart_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Home\\ShopcartController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/home/shopcart')), array(), array()),
        'order_detail_index' => array(array(), array('_controller' => 'App\\Controller\\OrderDetailController::index'), array(), array(array('text', '/order/detail/')), array(), array()),
        'order_detail_new' => array(array(), array('_controller' => 'App\\Controller\\OrderDetailController::new'), array(), array(array('text', '/order/detail/new')), array(), array()),
        'order_detail_show' => array(array('id'), array('_controller' => 'App\\Controller\\OrderDetailController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/order/detail')), array(), array()),
        'order_detail_edit' => array(array('id'), array('_controller' => 'App\\Controller\\OrderDetailController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/order/detail')), array(), array()),
        'order_detail_delete' => array(array('id'), array('_controller' => 'App\\Controller\\OrderDetailController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/order/detail')), array(), array()),
        'orders_index' => array(array(), array('_controller' => 'App\\Controller\\OrdersController::index'), array(), array(array('text', '/home/orders/')), array(), array()),
        'orders_new' => array(array(), array('_controller' => 'App\\Controller\\OrdersController::new'), array(), array(array('text', '/home/orders/new')), array(), array()),
        'orders_show' => array(array('id'), array('_controller' => 'App\\Controller\\OrdersController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/home/orders')), array(), array()),
        'orders_edit' => array(array('id'), array('_controller' => 'App\\Controller\\OrdersController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/home/orders')), array(), array()),
        'orders_delete' => array(array('id'), array('_controller' => 'App\\Controller\\OrdersController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/home/orders')), array(), array()),
        'app_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/home/login')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        'app_logout' => array(array(), array(), array(), array(array('text', '/logout')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
