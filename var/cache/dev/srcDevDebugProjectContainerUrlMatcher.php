<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/admin/kategoriler/' => array(array('_route' => 'kategoriler_index', '_controller' => 'App\\Controller\\Admin\\CategoriesController::index'), null, array('GET' => 0), null),
                    '/admin/kategoriler/yeni' => array(array('_route' => 'kategori_ekle', '_controller' => 'App\\Controller\\Admin\\CategoriesController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/messages/' => array(array('_route' => 'messages_index', '_controller' => 'App\\Controller\\Admin\\MessagesController::index'), null, array('GET' => 0), null),
                    '/admin/product/' => array(array('_route' => 'product_index', '_controller' => 'App\\Controller\\Admin\\ProductController::index'), null, array('GET' => 0), null),
                    '/admin/product/new' => array(array('_route' => 'product_new', '_controller' => 'App\\Controller\\Admin\\ProductController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/urunresimleri/' => array(array('_route' => 'resimler_index', '_controller' => 'App\\Controller\\Admin\\ResimlerController::index'), null, array('GET' => 0), null),
                    '/admin/urunresimleri/new' => array(array('_route' => 'resimler_new', '_controller' => 'App\\Controller\\Admin\\ResimlerController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/setting/' => array(array('_route' => 'setting_index', '_controller' => 'App\\Controller\\Admin\\SettingController::index'), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/uyeler/' => array(array('_route' => 'user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'), null, array('GET' => 0), null),
                    '/admin' => array(array('_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\adminController::index'), null, null, null),
                    '/' => array(array('_route' => 'home', '_controller' => 'App\\Controller\\Home\\HomeController::index'), null, null, null),
                    '/home/aboutus' => array(array('_route' => 'home_aboutus', '_controller' => 'App\\Controller\\Home\\HomeController::aboutus'), null, null, null),
                    '/home/contact' => array(array('_route' => 'home_contact', '_controller' => 'App\\Controller\\Home\\HomeController::contact'), null, array('GET' => 0, 'POST' => 1), null),
                    '/home/newuser/' => array(array('_route' => 'new_user', '_controller' => 'App\\Controller\\Home\\HomeController::userSignUp'), null, array('GET' => 0, 'POST' => 1), null),
                    '/home/shopcart/' => array(array('_route' => 'shopcart_index', '_controller' => 'App\\Controller\\Home\\ShopcartController::index'), null, array('GET' => 0), null),
                    '/order/detail/' => array(array('_route' => 'order_detail_index', '_controller' => 'App\\Controller\\OrderDetailController::index'), null, array('GET' => 0), null),
                    '/order/detail/new' => array(array('_route' => 'order_detail_new', '_controller' => 'App\\Controller\\OrderDetailController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/home/orders/' => array(array('_route' => 'orders_index', '_controller' => 'App\\Controller\\OrdersController::index'), null, array('GET' => 0), null),
                    '/home/orders/new' => array(array('_route' => 'orders_new', '_controller' => 'App\\Controller\\OrdersController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/home/login' => array(array('_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                    '/logout' => array(array('_route' => 'app_logout'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/admin/(?'
                        .'|kategoriler/(?'
                            .'|goster/([^/]++)(*:47)'
                            .'|([^/]++)/(?'
                                .'|guncelle(*:74)'
                                .'|sil(*:84)'
                            .')'
                        .')'
                        .'|messages/([^/]++)(?'
                            .'|(*:113)'
                            .'|/delete(*:128)'
                        .')'
                        .'|product/(?'
                            .'|([^/]++)(?'
                                .'|(*:159)'
                                .'|/edit(*:172)'
                                .'|(*:180)'
                            .')'
                            .'|gallery/([^/]++)(*:205)'
                        .')'
                        .'|u(?'
                            .'|runresimleri/([^/]++)(?'
                                .'|(*:242)'
                                .'|/edit(*:255)'
                                .'|(*:263)'
                            .')'
                            .'|yeler/([^/]++)(?'
                                .'|(*:289)'
                                .'|/(?'
                                    .'|edit(*:305)'
                                    .'|delete(*:319)'
                                .')'
                            .')'
                        .')'
                        .'|orders/(?'
                            .'|([^/]++)(*:348)'
                            .'|show/([^/]++)(*:369)'
                        .')'
                    .')'
                    .'|/home/(?'
                        .'|product(?'
                            .'|s/([^/]++)(*:408)'
                            .'|/([^/]++)(*:425)'
                        .')'
                        .'|myaccount/(?'
                            .'|([^/]++)(*:455)'
                            .'|edit/([^/]++)(*:476)'
                        .')'
                        .'|shopcart/([^/]++)(?'
                            .'|(*:505)'
                        .')'
                        .'|orders/([^/]++)(?'
                            .'|(*:532)'
                            .'|/edit(*:545)'
                            .'|(*:553)'
                        .')'
                    .')'
                    .'|/order/detail/([^/]++)(?'
                        .'|(*:588)'
                        .'|/edit(*:601)'
                        .'|(*:609)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:649)'
                        .'|wdt/([^/]++)(*:669)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:715)'
                                .'|router(*:729)'
                                .'|exception(?'
                                    .'|(*:749)'
                                    .'|\\.css(*:762)'
                                .')'
                            .')'
                            .'|(*:772)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 505:
                        $matches = array('id' => $matches[1] ?? null);

                        // shopcart_show
                        $ret = $this->mergeDefaults(array('_route' => 'shopcart_show') + $matches, array('_controller' => 'App\\Controller\\Home\\ShopcartController::show'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_shopcart_show;
                        }

                        return $ret;
                        not_shopcart_show:

                        // shopcart_delete
                        $ret = $this->mergeDefaults(array('_route' => 'shopcart_delete') + $matches, array('_controller' => 'App\\Controller\\Home\\ShopcartController::delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_shopcart_delete;
                        }

                        return $ret;
                        not_shopcart_delete:

                        break;
                    default:
                        $routes = array(
                            47 => array(array('_route' => 'kategori_goster', '_controller' => 'App\\Controller\\Admin\\CategoriesController::show'), array('id'), array('GET' => 0), null),
                            74 => array(array('_route' => 'kategori_guncelle', '_controller' => 'App\\Controller\\Admin\\CategoriesController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            84 => array(array('_route' => 'kategori_sil', '_controller' => 'App\\Controller\\Admin\\CategoriesController::delete'), array('id'), null, null),
                            113 => array(array('_route' => 'messages_show', '_controller' => 'App\\Controller\\Admin\\MessagesController::show'), array('id'), array('GET' => 0), null),
                            128 => array(array('_route' => 'messages_delete', '_controller' => 'App\\Controller\\Admin\\MessagesController::delete'), array('id'), null, null),
                            159 => array(array('_route' => 'product_show', '_controller' => 'App\\Controller\\Admin\\ProductController::show'), array('id'), array('GET' => 0), null),
                            172 => array(array('_route' => 'product_edit', '_controller' => 'App\\Controller\\Admin\\ProductController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            180 => array(array('_route' => 'product_delete', '_controller' => 'App\\Controller\\Admin\\ProductController::delete'), array('id'), array('DELETE' => 0), null),
                            205 => array(array('_route' => 'product_gallery', '_controller' => 'App\\Controller\\Admin\\ProductController::gallery'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            242 => array(array('_route' => 'resimler_show', '_controller' => 'App\\Controller\\Admin\\ResimlerController::show'), array('id'), array('GET' => 0), null),
                            255 => array(array('_route' => 'resimler_edit', '_controller' => 'App\\Controller\\Admin\\ResimlerController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            263 => array(array('_route' => 'resimler_delete', '_controller' => 'App\\Controller\\Admin\\ResimlerController::delete'), array('id'), array('DELETE' => 0), null),
                            289 => array(array('_route' => 'user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'), array('id'), array('GET' => 0), null),
                            305 => array(array('_route' => 'user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            319 => array(array('_route' => 'user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'), array('id'), array('GET' => 0), null),
                            348 => array(array('_route' => 'admin_orders', '_controller' => 'App\\Controller\\Admin\\adminController::ordersindex'), array('slug'), null, null),
                            369 => array(array('_route' => 'admin_order_show', '_controller' => 'App\\Controller\\Admin\\adminController::ordershow'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            408 => array(array('_route' => 'home_products', '_controller' => 'App\\Controller\\Home\\HomeController::products'), array('id'), null, null),
                            425 => array(array('_route' => 'product_detail', '_controller' => 'App\\Controller\\Home\\HomeController::productdetail'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            455 => array(array('_route' => 'home_account', '_controller' => 'App\\Controller\\Home\\HomeController::myAccount'), array('id'), array('GET' => 0), null),
                            476 => array(array('_route' => 'account_edit', '_controller' => 'App\\Controller\\Home\\HomeController::accountEdit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            532 => array(array('_route' => 'orders_show', '_controller' => 'App\\Controller\\OrdersController::show'), array('id'), array('GET' => 0), null),
                            545 => array(array('_route' => 'orders_edit', '_controller' => 'App\\Controller\\OrdersController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            553 => array(array('_route' => 'orders_delete', '_controller' => 'App\\Controller\\OrdersController::delete'), array('id'), array('DELETE' => 0), null),
                            588 => array(array('_route' => 'order_detail_show', '_controller' => 'App\\Controller\\OrderDetailController::show'), array('id'), array('GET' => 0), null),
                            601 => array(array('_route' => 'order_detail_edit', '_controller' => 'App\\Controller\\OrderDetailController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            609 => array(array('_route' => 'order_detail_delete', '_controller' => 'App\\Controller\\OrderDetailController::delete'), array('id'), array('DELETE' => 0), null),
                            649 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            669 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            715 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            729 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            749 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            762 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            772 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (772 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
