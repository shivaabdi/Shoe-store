<?php

/* admin/sidebar.twig */
class __TwigTemplate_d14d000b3add06d0493da995d289f851a2eeb611e399af3bd23c04516b317e07 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/sidebar.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/sidebar.twig"));

        // line 1
        echo "<div class=\"sidebar\" data-color=\"purple\" data-background-color=\"white\" data-image=\"../assets/img/sidebar-1.jpg\">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color=\"purple | azure | green | orange | danger\"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class=\"logo\">
        <a href=\"http://www.creative-tim.com\" class=\"simple-text logo-normal\">
            Creative Tim
        </a>
    </div>
    <div class=\"sidebar-wrapper\">
        <ul class=\"nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">
                    <i class=\"material-icons\">dashboard</i>
                    <p>Anasayfa</p>
                </a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"material-icons\">shopping_cart</i>
                    <span class=\"notification\">Siparişler</span>
                    <p class=\"d-lg-none d-md-block\">
                        Some Actions
                    </p>
                    <div class=\"ripple-container\"></div></a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders", array("slug" => "new"));
        echo "\">Yeni Siparişler</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders", array("slug" => "accepted"));
        echo "\">Onaylanan Siparişler</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders", array("slug" => "inshipping"));
        echo "\">Kargodaki Siparişler</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders", array("slug" => "cancelled"));
        echo "\">İptal Edilen Siparişler</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders", array("slug" => "completed"));
        echo "\">Tamamlanan Siparişler</a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"material-icons\">add_shopping_cart</i>
                    <span class=\"notification\">Ürünler</span>
                    <p class=\"d-lg-none d-md-block\">
                        Some Actions
                    </p>
                    <div class=\"ripple-container\"></div></a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\">Ürün Bilgileri</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resimler_index");
        echo "\">Ürün Resimleri</a>
                </div>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kategoriler_index");
        echo "\">
                    <i class=\"material-icons\">library_books</i>
                    <p>Kategoriler</p>
                </a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\">
                    <i class=\"material-icons\">supervisor_account</i>
                    <p>Üyeler</p>
                </a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages_index");
        echo "\">
                    <i class=\"material-icons\">messages</i>
                    <p>Mesajlar</p>
                </a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"./notifications.html\">
                    <i class=\"material-icons\">notifications</i>
                    <p>SSS</p>
                </a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_index");
        echo "\">
                    <i class=\"material-icons\">settings</i>
                    <p>Ayarlar</p>
                </a>
            </li>

        </ul>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 74,  122 => 62,  113 => 56,  104 => 50,  97 => 46,  93 => 45,  78 => 33,  74 => 32,  70 => 31,  66 => 30,  62 => 29,  45 => 15,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar\" data-color=\"purple\" data-background-color=\"white\" data-image=\"../assets/img/sidebar-1.jpg\">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color=\"purple | azure | green | orange | danger\"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class=\"logo\">
        <a href=\"http://www.creative-tim.com\" class=\"simple-text logo-normal\">
            Creative Tim
        </a>
    </div>
    <div class=\"sidebar-wrapper\">
        <ul class=\"nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('admin') }}\">
                    <i class=\"material-icons\">dashboard</i>
                    <p>Anasayfa</p>
                </a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"material-icons\">shopping_cart</i>
                    <span class=\"notification\">Siparişler</span>
                    <p class=\"d-lg-none d-md-block\">
                        Some Actions
                    </p>
                    <div class=\"ripple-container\"></div></a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"{{ path('admin_orders',{'slug':'new'}) }}\">Yeni Siparişler</a>
                    <a class=\"dropdown-item\" href=\"{{ path('admin_orders',{'slug':'accepted'}) }}\">Onaylanan Siparişler</a>
                    <a class=\"dropdown-item\" href=\"{{ path('admin_orders',{'slug':'inshipping'}) }}\">Kargodaki Siparişler</a>
                    <a class=\"dropdown-item\" href=\"{{ path('admin_orders',{'slug':'cancelled'}) }}\">İptal Edilen Siparişler</a>
                    <a class=\"dropdown-item\" href=\"{{ path('admin_orders',{'slug':'completed'}) }}\">Tamamlanan Siparişler</a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"material-icons\">add_shopping_cart</i>
                    <span class=\"notification\">Ürünler</span>
                    <p class=\"d-lg-none d-md-block\">
                        Some Actions
                    </p>
                    <div class=\"ripple-container\"></div></a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"{{ path('product_index') }}\">Ürün Bilgileri</a>
                    <a class=\"dropdown-item\" href=\"{{ path('resimler_index')}}\">Ürün Resimleri</a>
                </div>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"{{ path('kategoriler_index') }}\">
                    <i class=\"material-icons\">library_books</i>
                    <p>Kategoriler</p>
                </a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"{{ path('user_index') }}\">
                    <i class=\"material-icons\">supervisor_account</i>
                    <p>Üyeler</p>
                </a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"{{ path('messages_index') }}\">
                    <i class=\"material-icons\">messages</i>
                    <p>Mesajlar</p>
                </a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"./notifications.html\">
                    <i class=\"material-icons\">notifications</i>
                    <p>SSS</p>
                </a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link\" href=\"{{ path('setting_index') }}\">
                    <i class=\"material-icons\">settings</i>
                    <p>Ayarlar</p>
                </a>
            </li>

        </ul>
    </div>
</div>", "admin/sidebar.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\admin\\sidebar.twig");
    }
}
