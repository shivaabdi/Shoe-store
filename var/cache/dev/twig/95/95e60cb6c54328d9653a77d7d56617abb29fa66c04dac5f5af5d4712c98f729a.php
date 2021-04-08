<?php

/* home/_header.html.twig */
class __TwigTemplate_d088b3a5c0f42096c49617692652973b4e0aaf3aeccd9eff5ba3c1c1d9f08361 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/_header.html.twig"));

        // line 1
        echo "<div class=\"header\" id=\"home\">
    <div class=\"container\">
        <ul>
            ";
        // line 4
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 5
            echo "                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_index");
            echo "\">Siparişlerim</a></li>
                <li><a href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopcart_index");
            echo "\">Sepetim</a></li>
                <li><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_account", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "user", array()), "id", array()))), "html", null, true);
            echo "\">Hesabım</a></li>
                <li><a href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Çıkış Yap</a></li>
            ";
        } else {
            // line 10
            echo "                <li> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i> Sign In </a></li>
                <li> <a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_user");
            echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Sign Up </a></li>
                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> Call : 01234567898</li>
                <li><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> <a href=\"mailto:info@example.com\">info@example.com</a></li>
            ";
        }
        // line 15
        echo "        </ul>
    </div>
</div>
<!-- //header -->

<!-- header-bot -->
<div class=\"header-bot\">
    <div class=\"header-bot_inner_wthreeinfo_header_mid\">
        <div class=\"col-md-4 header-middle\">
            <form action=\"#\" method=\"post\">
                <input type=\"search\" name=\"search\" placeholder=\"Search here...\" required=\"\">
                <input type=\"submit\" value=\" \">
                <div class=\"clearfix\"></div>
            </form>
        </div>
        <!-- header-bot -->
        <div class=\"col-md-4 logo_agile\">
            <h1><a href=\"index.html\"><span>E</span>lite Shoppy <i class=\"fa fa-shopping-bag top_logo_agile_bag\" aria-hidden=\"true\"></i></a></h1>
        </div>
        <!-- header-bot -->
        <div class=\"col-md-4 agileits-social top_content\">
            <ul class=\"social-nav model-3d-0 footer-social w3_agile_social\">
                <li class=\"share\">Share On : </li>
                <li><a href=\"#\" class=\"facebook\">
                        <div class=\"front\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"twitter\">
                        <div class=\"front\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"instagram\">
                        <div class=\"front\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"pinterest\">
                        <div class=\"front\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div></a></li>
            </ul>



        </div>
        <div class=\"clearfix\"></div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  59 => 11,  54 => 10,  49 => 8,  45 => 7,  41 => 6,  36 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"header\" id=\"home\">
    <div class=\"container\">
        <ul>
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li><a href=\"{{ path('orders_index') }}\">Siparişlerim</a></li>
                <li><a href=\"{{ path('shopcart_index') }}\">Sepetim</a></li>
                <li><a href=\"{{ path('home_account',{'id':app.user.id}) }}\">Hesabım</a></li>
                <li><a href=\"{{ path('app_logout') }}\">Çıkış Yap</a></li>
            {% else %}
                <li> <a href=\"{{ path('app_login') }}\"><i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i> Sign In </a></li>
                <li> <a href=\"{{ path('new_user') }}\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Sign Up </a></li>
                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> Call : 01234567898</li>
                <li><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> <a href=\"mailto:info@example.com\">info@example.com</a></li>
            {% endif %}
        </ul>
    </div>
</div>
<!-- //header -->

<!-- header-bot -->
<div class=\"header-bot\">
    <div class=\"header-bot_inner_wthreeinfo_header_mid\">
        <div class=\"col-md-4 header-middle\">
            <form action=\"#\" method=\"post\">
                <input type=\"search\" name=\"search\" placeholder=\"Search here...\" required=\"\">
                <input type=\"submit\" value=\" \">
                <div class=\"clearfix\"></div>
            </form>
        </div>
        <!-- header-bot -->
        <div class=\"col-md-4 logo_agile\">
            <h1><a href=\"index.html\"><span>E</span>lite Shoppy <i class=\"fa fa-shopping-bag top_logo_agile_bag\" aria-hidden=\"true\"></i></a></h1>
        </div>
        <!-- header-bot -->
        <div class=\"col-md-4 agileits-social top_content\">
            <ul class=\"social-nav model-3d-0 footer-social w3_agile_social\">
                <li class=\"share\">Share On : </li>
                <li><a href=\"#\" class=\"facebook\">
                        <div class=\"front\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"twitter\">
                        <div class=\"front\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"instagram\">
                        <div class=\"front\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"pinterest\">
                        <div class=\"front\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div></a></li>
            </ul>



        </div>
        <div class=\"clearfix\"></div>
    </div>
</div>", "home/_header.html.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\home\\_header.html.twig");
    }
}
